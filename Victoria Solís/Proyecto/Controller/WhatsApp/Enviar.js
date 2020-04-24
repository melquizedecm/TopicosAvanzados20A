/*****************************************************************************
# Program Name: Program 15.js
# Authors: Josue Antonio Castro Collí. 
# Description: Enviar un mensajes de WhatsApp con JavaScript. 
# Date: 06/Marzo/2020
#
#Funciones:
# CrearMensaje ( )               // Genera el mensaje modificando la dirección web del WhatsApp
#									con los digitos que el usuario introdujo.
******************************************************************************
*****************************************************************************/
function CrearMensaje() {
	//Obtener el mensaje escrito.
	var mensaje = document.getElementById('message').value;

	//Verificar si tiene llenado el campos que se solicita.
	if (mensaje){
		//Para mandar al usuario a la página de WhatsApp y prosiga para enviar el mansaje.
		location.href="https://api.whatsapp.com/send?phone=529993815121&text="+mensaje;
		//Montrar que todo sigue bien.
		alert('Procesando');
	} else {
		//Pedirle que llene el campos si no lo hizo.
		alert('¡No se relleno el campos solicitado!');
	}

//https://api.whatsapp.com/send?phone=529993815121&text=Prueba 
}