/*
* Source:         Program6.html
* Description:    Validar Imputs
* Tomando valores de los Imput y realizando operaciones
* Date:           20/Feb/20
* Author:         González Gómez Leandro
*/
function CalcularIva(){

  var Valor=document.getElementById('InputValor').value;
  var Iva=document.getElementById('inputIva').value;


  if(isNaN(Valor) || isNaN(Iva)){
    alert("No es numérico el valor");
    document.getElementById('inputValor').value;
  }else {
    Valor=parseFloat(Valor);
    Iva=parseFloat(Iva);
  }

  var Total=((Valor*Iva)/100)+Valor;
  document.getElementById('inputTotal').value=Total;

}
