var numero=0;
while (numero = prompt("Escriba la cantidad de calificaciones")) {
    if (isNaN(numero)) {
        alert("Valor no admitido, introduzca uno nuevo");
    } else {
        cantidad=parseInt(numero);
        var calificaciones=[];
        var total=0;
        var calificacion=0;
        for (var i = 0; i < cantidad; i++) {
            calificaciones[i]=prompt("Escriba la calificación");
            if (isNaN(calificaciones[i])) {
                alert("Valor no admitido, introduzca uno nuevo");
                i=i-1;
            }else{
                calificacion=parseFloat(calificaciones[i]);
                total=total+calificacion;
            }
        }
        total=total/cantidad;
        alert("promedio: "+total);
    }
  }
