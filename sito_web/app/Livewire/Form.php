<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Validate;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;




class Form extends Component
{
      
    public $formato;
    public $id;
    public $name;
    public $file;
    use WithFileUploads; 
    public $form =true;

    
    

    public function submit(Request $request)
    {       
       
 // Salva file se esiste
 $this->name = $this->file->getClientOriginalName();
 $filePath = $this->file ? $this->file->store('file', 'public') : null;


 if ($this->file) {
    $originalName = $this->file->getClientOriginalName();
    $this->name= $originalName;
 }


 //$path = $request->file('filePath')->store('upload', 'public');
 $url =Storage::url($filePath);
$validated=request()->validate([
    'formato'=> 'nullable|string|max:15',
]);

 // Salva nel DB
 File::create([
    'name' => $this->file->getClientOriginalName(),
    'file' => $filePath,
 ]);

 session()->flash('success', 'Messaggio inviato!');
 $this->reset();
}
    

/* public function vaiAlController()
{
    return redirect()->route('profilo.utente', ['id' => $this->form]);
} */

public function alternaForm()
{
    $this->form = !$this->form;
}
    
public function upload(){
    $estensione= pathinfo($this->name);
    if($estensione == 'odt'){
  switch($this->formato){
    case 'pdf':
        exec("libreoffice --headless --convert-to pdf --outdir sito_web\database\file $this->file", $output, $return_var);

  break;
  case 'doc':
    exec("libreoffice --headless --convert-to doc --outdir sito_web\database\file $this->file", $output, $return_var);
    break;
    case 'docx':
        exec("libreoffice --headless --convert-to docx --outdir sito_web\database\file $this->file", $output, $return_var);
        break;
        case 'html':
            exec("libreoffice --headless --convert-to html --outdir sito_web\database\file $this->file", $output, $return_var);
            break;
            case 'txt':
                exec("libreoffice --headless --convert-to txt --outdir sito_web\database\file $this->file", $output, $return_var);
                break;
                case 'epub':
                    exec("libreoffice --headless --convert-to epub --outdir sito_web\database\file $this->file", $output, $return_var);
                    break;
                    case 'rtf':
                        exec("libreoffice --headless --convert-to rtf --outdir sito_web\database\file $this->file", $output, $return_var);
                        break;
                        case 'odt':
                            exec("libreoffice --headless --convert-to odt --outdir sito_web\database\file $this->file", $output, $return_var);
                            break;
  }
}else if($estensione == 'doc'){}
 
    }

    public function render()
    {
        return view('livewire.form');
    }
}
