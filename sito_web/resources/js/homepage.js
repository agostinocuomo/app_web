import 'bootstrap';
import './bootstrap';


document.addEventListener('DoomContentLoaded', function () {
  $form1 = document.querySelector(".form").addEventListener('submit', function(event) {   
    event.preventDefault(); // ✅ Blocca l'invio predefinito (es. refresh pagina)
    form =true;
    document.getElementById('variabileInput').value = form;
document.getElementById('myForm').submit();
});
});



