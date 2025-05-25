<?php

namespace App\Livewire;

use Livewire\Component;

class Form2 extends Component
{

    public $name;
    
    public function upload(){
        $image = Image::make("storage/app/public/upload/{$name}")
            ->encode( $formato , 90)
            ->save("storage/app/public/immagine_convertita.{{$formato}}");
        
            $validated=request()->validate([
                'name'=> 'nullable|string|max:15',
                'file'=> 'nullable|string|max:15',
            ]);
        
            File::create([
                'formato' => $this->formato,
             ]);
        }
        
    public function render()
    {
        return view('livewire.form2');
    }
}
