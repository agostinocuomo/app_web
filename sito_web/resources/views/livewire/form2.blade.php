<label  for="document_file"> Documento:  </label> <br>
         <h3> {{ $name }} </h3>
        <!--  <img src="$url" alt="" style="width:300px; height:200px"> -->
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
