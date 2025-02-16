<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\css\homepage.css','resources\js\homepage.js']);
</head>
<body class="">
    <header>
        <div class="testa ">
            <div class="primodiv"></div>
            <div class="secondodiv"></div>
            <div class="terzodiv"></div> 
        </div>
    </header>


    <form action="/path_to_your_backend" method="POST" enctype="multipart/form-data" class="form border border-secondary d-flex justify-content-center flex-column align-items-center  w-25 h-25">
        <h2 class="text-center text-danger">Carica il tuo Documento</h2>
    @csrf
        <label for="document_file">Carica il Documento:</label><br>
        <input type="file" id="document_file" name="document_file" accept=".pdf,.doc,.docx,.jpg,.png" required><br><br>
        <input type="submit" value="Carica Documento">
    </form>

   
<div class="border border-secondary footer"></div>

</body>
</html>