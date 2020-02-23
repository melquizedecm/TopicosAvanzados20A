/*
+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*Source: Programa1.js
*Description: Endendido/Apagado.
*Date: 13/02/2020
*Author: Miguel Angel Pech Mena
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/


/*function mensaje(){
  alert("hola mundo");
}*/

function encender(){
  var motor = document.getElementById("motor");
  motor.innerHTML= "<img src='https://i1.wp.com/i3.8000vueltas.com/2007/07/4cyl-animation.gif'>" ;
}

function apagar(){
  var motor = document.getElementById("motor");
  motor.innerHTML= "<img src='C:/xampp/htdocs/SistemaKaraoke/TopicosAvanzados20A/Miguel%20Angel%20Pech%20Mena/motor.png'>" ;
}
