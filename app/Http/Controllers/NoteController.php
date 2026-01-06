<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelEtudiant;
use App\Models\Note;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Smalot\PdfParser\Parser as PdfParser;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    // Importer des notes depuis un fichier Excel/CSV
    public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls,csv,pdf,jpg,jpeg,png',
            'module' => 'required|string',      
            'session' => 'required|string',
            'departement' => 'nullable|string',
            'filiere' => 'nullable|string',
            'semestre' => 'nullable|string',
            'date_examen' => 'nullable|date'
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator)->withInput();
        }

        $file = $request->file('file');
        $extension = strtolower($file->getClientOriginalExtension());

        $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_.-]/', '_', $file->getClientOriginalName());
        $storedPath = $file->storeAs('public/imports', $filename);

        $notFound = [];
        $created = 0;

        if (in_array($extension, ['xlsx', 'xls', 'csv'])) {
            try {
                $data = Excel::toArray([], $file);
            } catch (\Exception $e) {
                dd($e->getMessage());
                return back()->with('error', 'Impossible de lire le fichier Excel/CSV : ' . $e->getMessage());
            }

            if (empty($data) || !isset($data[0])) {
                return back()->with('error', 'Aucune donnée trouvée dans le fichier.');
            }

            $rows = $data[0];

            if (count($rows) < 1) {

                return back()->with('error', 'Fichier vide.');
            }
            for ($i = 1; $i < count($rows); $i++) {
                $row = $rows[$i];
                $mat = isset($row[0]) ? trim($row[0]) : '';
                if ($mat === '') continue;
                $prenom = isset($row[1]) ? trim($row[1]) : null;
                $nom = isset($row[2]) ? trim($row[2]) : null;
                $noteValue = isset($row[3]) ? $row[3] : null;

                $etudiant = ModelEtudiant::where('matricule', $mat)->first();
                if (!$etudiant) {
                    $notFound[] = $mat;
                    continue;
                }

                $note=new Note();
                    $note->etudiant_id=$etudiant->id;
                    $note->departement=$request->input('departement');
                    $note->filiere=$request->input('filiere');
                    $note->semestre=$request->input('semestre');
                    $note->module=$request->input('module');
                    $note->note=$noteValue;
                    $note->date_examen=$request->input('date_examen');
                    $note->session=$request->input('session');
                    $note->save();
                $created++;
            }

        } elseif ($extension === 'pdf') {
            try {
                $parser = new PdfParser();
                $pdf = $parser->parseFile($file->getPathname());
                $text = $pdf->getText();
            } catch (\Exception $e) {
                return back()->with('error', 'Impossible de lire le fichier PDF : ' . $e->getMessage());
            }

            $lines = preg_split('/\r?\n/', $text);
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === '') continue;
                if (preg_match('/(\w+)\s+([\w-]+)\s+([\w-]+)\s+([\d.]+)/', $line, $m)) {
                    $mat = $m[1];
                    $prenom = $m[2];
                    $nom = $m[3];
                    $noteValue = $m[4];

                    $etudiant = ModelEtudiant::where('matricule', $mat)->first();
                    if (!$etudiant) {
                        $notFound[] = $mat;
                        continue;
                    }

                    $note=new Note();
                    $note->etudiant_id=$etudiant->id;
                    $note->departement=$request->input('departement');
                    $note->filiere=$request->input('filiere');
                    $note->semestre=$request->input('semestre');
                    $note->module=$request->input('module');
                    $note->note=$noteValue;
                    $note->date_examen=$request->input('date_examen');
                    $note->session=$request->input('session');
                    $note->save();

                    
                    $created++;
                }
            }

        } else {
            return back()->with('error', 'Type de fichier non supporté.');
        }

        return back()->with('success', "$created notes importées.")->with('not_found_matricules', $notFound);
    }

}
