<section>

@if($form == true)
<form  wire:submit.prevent="submit" method="POST"  enctype="multipart/form-data" class="form border border-secondary d-flex justify-content-center flex-column align-items-center  w-25 h-25">
    @csrf
        <h2 class="text-center text-danger">Carica il tuo Documento</h2>
        <label  for="document_file">Carica il Documento:</label> <br>
        <input wire:model="file" type="file" id="document_file"  accept=".pdf,.doc,.docx,.jpg,.png" required><br><br>
        <input type="hidden" name="form" value="false" wire:model.lazy="form" >
        <input type="submit" value="Carica Documento" >
    
        </form>
        @php
        var_dump($form)
      
        @endphp
        @else
       
        <label  for="document_file"> Documento:  </label> <br>
        <h3> {{ $name }} </h3>
        <label for="formato">scegli il formato:</label>

<form wire:submit.prevent="upload" method="POST" class="form2">
           @csrf
<select name="formato" wire:model.lazy="formato">
 <option value="pdf" >pdf</option>
 <option value="jpg">jpg</option>
 <option value="world">world</option>
</select>
<input type="submit"  value="formato" >
</form>


        @php
        var_dump($form)
        @endphp
    @endif  

    <button wire:click="alternaForm"> Scegli formato</button>
</section>