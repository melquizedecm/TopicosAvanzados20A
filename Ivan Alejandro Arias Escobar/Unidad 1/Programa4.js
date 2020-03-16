/* *Source:Programa1.js 
*Description: Funciones iniciales en JS *Encender un motor / Apagar motor 
*Date: 14/Feb/2020
*Author: Ivan Alejandro Arias Escobar 
*/
var numero;
var suma=0;
var cal=[];
var i;

while (true){
	numero=prompt ("Escribe la cantidad de calificaciones ");
	if(numero % 1==0 && numero >0 ){
        break;
	}else{ 
		alert("No es entero positivo");
	}

}
for(i=0; i<numero;i+++){
	while(true){
		var calificacion=prompt("Escribe la calificacion del alumnno");
		cal[i]=Number(calificacion);
		if(cal[i]%1==0 && cal[i]>=0 && cal[i]<=100){
			break;
		}else{ alert("No es valida");}
	}
	suma=suma+cal[i];
}
alert("El promedio es: "+promedio);