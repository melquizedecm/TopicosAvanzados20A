/*****************************************************************************
******************************************************************************
# Program Name: Program15.html y JS
# Authors: Miguel Angel Pech Mena
# Description:  Envio de mensajes en whatsapp con libreria en JS

#Funciones:
# querySelector(field) // Selecciona el Campo con el que trabajar
# addEventListener(action, functions(var)) // Realiza la(s) función(es)
                                              mediante la acción
# encodeURIComponent(var) // Añade la Variable a la dirección
# open(var) // Abre (en este caso una ventana)
******************************************************************************
*****************************************************************************/

document.querySelector('#send_message').addEventListener('click',function(){
  var message = document.querySelector('#mensaje').value;
  var number = document.querySelector('#number').value;
  var url = "whatsapp://send?text="+encodeURIComponent(message)+"&phone="+encodeURIComponent(number)
  window.open(url);
});
