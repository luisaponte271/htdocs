  
 var amount = document.getElementById("amount");
 
 amount.addEventListener("input", function() {
 
   var value = input.value;
   
   // Verificamos si el valor no está vacío
   if(value.length > 0) {
     console.log("Se ha ingresado un valor en el campo de texto: " + value);
   }
 });