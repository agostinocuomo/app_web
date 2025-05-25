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
    
    

    public function submit(Request $request)
    {
       
       
 // Salva file se esiste
 $filePath = $this->file ? $this->file->store('file', 'public') : null;
 $this->name = $this->file->getClientOriginalName();

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
    




    public function render()
    {
        return view('livewire.form');
    }
}
