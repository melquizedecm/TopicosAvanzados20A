function calculaIva() {
  //obtener los valores
  var valor = document.getElementById('valor').value;
  var iva = document.getElementById('iva').value;

  //validar numeros en los input
  if (isNaN(valor) || isNaN(iva)){
    alert("No es numerico");
    
  } else {
     valor = parseFloat(valor);
     iva = parseFloat(iva);
  }

  //calcula el Iva
  var total = ((valor * iva) / 100) + valor;
  document.getElementById('calculo').value=total;
}
