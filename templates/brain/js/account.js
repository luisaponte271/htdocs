function changePassword(){
    if($("#newPassword").val() === $("#newPassword2").val()){ 
      var parametros = 
      {
        "newPass" : $("#newPassword").val(), 
        "oldPass": $("#oldPassword").val(),
        } ;
        
     $.ajax({
       data: parametros,
       url: 'accountverify',
       type: 'POST',
     
       beforesend: function(){ 
         $("#changePasswordResult").html("Mensaje antes de Enviar");
       },
       success: function(mensaje_mostrar) { 
        var oldpass = document.getElementById("oldPassword");
        var newpass = document.getElementById("newPassword");
        var newpass2 = document.getElementById("newPassword2");
     
         $("#changePasswordResult").html(mensaje_mostrar);
         oldpass.value= "";
         newpass.value= "";
         newpass2.value= "";
       }
   });
    }else if($("#newPassword").val() !== $("#newPassword2").val()){ 
        alert("Las contraseñas no son iguales"); 
    }
}

function saveBilletera()  { 
  var parametros = 
  {
    "billetera" : $("#billetera").val()  
    } ;
    
 $.ajax({
   data: parametros,
   url: 'savebilletera',
   type: 'POST', 
 });

  document.getElementById('billetera').readOnly = true;
  document.getElementById('saveBilletera').style.display="none";
  document.getElementById('editBilletera').style.display="block";
}

function editarBilletera()  { 
    document.getElementById('billetera').readOnly = false;
    document.getElementById('saveBilletera').style.display="block";
    document.getElementById('editBilletera').style.display="none";
}
   