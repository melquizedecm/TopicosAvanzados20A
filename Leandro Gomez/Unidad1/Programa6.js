/*
* Source:         Program6.html
* Description:    Validar Inputs
* Tomando valores de los Input y realizando operaciones
* Date:           20/Feb/20
* Author:         González Gómez Leandro
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
