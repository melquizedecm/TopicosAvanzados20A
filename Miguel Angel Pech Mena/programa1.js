/*
*Source: programa1
*Description: funciones iniciales en js
*
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
