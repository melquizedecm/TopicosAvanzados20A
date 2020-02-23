function calculaIva(){
  var valor= document.getElementById('inputValor').value;
  var iva= document.getElementById('inputIVA').value;

  if (isNaN(valor) || isNaN(iva)) {
    alert("No es un valor númerico");
  /*  document.getElementById('inputValor').value="Escribe un Número";
    document.getElementById('inputIVA').value="Escribe un Número";*/
  }else {
    valor=parseFloat(valor);
    iva=parseFloat(iva);
  }
  var total = ((valor * iva) / 100) + valor;
  document.getElementById('inputTotal').value=total;
}
