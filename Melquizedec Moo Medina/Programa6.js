/*
 ******************************************
 * Source: Programa6.js
 * Description: Validar Inputs
 * Tomando valores de los input y realizando
 * operaciones
 * Date: 20/Feb/2020
 * Author: Melquizedec Moo Medina
 ******************************************
 */

function calculaIva(){
    // obtener los valores de los input
    var valor=document.getElementById('inputValor').value;
    var iva=document.getElementById('inputIva').value; //get el valor del inputIva
    
    // validar los valores de los input
    if (isNaN(valor) || isNaN(iva)){
        alert("No es numérico el Valor");
    }
    else{
        valor=parseFloat(valor);
        iva=parseFloat(iva);
    }

    // imprimir los resultados
    var total= ((valor*iva)/100)+valor; //get el control entero
    document.getElementById('inputTotal').value=total;
}