/*****************************************************************************
******************************************************************************
# Nombre del programa: programa15.js
# Autor: Gabriel Carcedo Rodríguez
# Descripcion: Ejemplo para mensajes de whatsapp

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
