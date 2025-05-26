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
    <div>
    <script src="">
        // ✅ Iniettiamo la variabile nel JavaScript
        let form = @json($form);
    </script>
    
    @if($form == true)
    <livewire:form />
    @php
    var_dump($form)
    //problema JAVASCRIPT!!!!!!!!!!!!!!!!!!!!!!!!!!!
    @endphp
    @else
    <livewire:form2>   
        @php
        var_dump($form)
        @endphp
    @endif      
    </div>

    <form id="myForm" action="/salva" method="POST">
        @csrf
        <input type="hidden" name="variabile" id="variabileInput">
    </form>
    
   
    

   
<div class="border border-secondary footer"></div>

</body>
</html>