
<form  wire:submit.prevent="submit" method="POST"  enctype="multipart/form-data" class="form border border-secondary d-flex justify-content-center flex-column align-items-center  w-25 h-25">
    @csrf
        <h2 class="text-center text-danger">Carica il tuo Documento</h2>
        <label  for="document_file">Carica il Documento:</label> <br>
        <input wire:model.lazy="file" type="file" id="document_file"  accept=".pdf,.doc,.docx,.jpg,.png" required><br><br>
        <input type="submit" value="Carica Documento">
        </form>

       
