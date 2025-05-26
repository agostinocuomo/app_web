<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrincipale extends Controller
{
    public $form = true;
   
    public function fileupload( Request $request){
           // Validazione del file (facoltativa ma consigliata)
           $request->validate([
            'file' => 'required|file|mimes:txt, pdf, doc, docx, rtf, odt|max:2048',  // esempio di validazione
        ]);

        // Verifica se un file è stato caricato
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            // Memorizza il file nella cartella 'uploads' (se non esiste, verrà creata)
            $path = $file->store('uploads');
            
            // Puoi fare altre operazioni, come salvare il percorso del file nel database

            return back()->with('success', 'File caricato con successo!')->with('path', $path);
        }
    } 

    public function variabile(){
        $this->form = true;

    }

    public function homepage(){
       $form = $this->form;

        return view('homepage', compact('form'));
    }
}
