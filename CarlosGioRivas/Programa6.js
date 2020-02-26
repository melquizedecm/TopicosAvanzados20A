/*
*source: Programa6.js
*description: Validar inputs
*tomando valores de los input y realizando operaciones
*date: 20/feb/2020
*author: Carlos Gio Rivas
*/

function calculaIva(){
  //obtener los valores de los input
  var Valor=document.getElementById('inputValor').value;
  var Iva=document.getElementById('inputIva').value; //jalar el valor del iva

  //Validar los valores de los input
  if (isNaN(Valor) || isNaN(Iva)) {
    alert("No es nuemrico el valor");

  }else {
    Valor=parseFloat(Valor);
    Iva=parseFloat(Iva)
  }
  //imprimir los resultados
  var Total=((Valor*Iva)/100)+Valor;
  document.getElementById('inputTotal').value=Total; //get el control entero
}
