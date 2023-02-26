function init() {
    var inputFile = document.getElementById('inputfile1'); 
    var inputFile2 = document.getElementById('inputfile2'); 
    inputFile.addEventListener('change', mostrarImagen, false);
    inputFile2.addEventListener('change', mostrarImagen2, false);
  }
  
  function mostrarImagen(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
      var img = document.getElementById('img1'); 
      img.src= event.target.result;
      document.getElementById('team1imagen').value = document.getElementById('inputfile1').files[0].name;
    }
    reader.readAsDataURL(file); 
  }
  function mostrarImagen2(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
      var img = document.getElementById('img2');
      img.src= event.target.result;
      document.getElementById('team2imagen').value = document.getElementById('inputfile2').files[0].name;
    }
    reader.readAsDataURL(file); 
  }
  
  window.addEventListener('load', init, false);