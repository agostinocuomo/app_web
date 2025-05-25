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
    <script src="resources/js/homepage.js">
        // ✅ Iniettiamo la variabile nel JavaScript
        let form1 = @json($form1);
    </script>
    
    <livewire:form/>
   
    <livewire:form2>
      
    </div>
   

   
<div class="border border-secondary footer"></div>

</body>
</html>