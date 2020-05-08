function crear(){
  //doc.text(60,60,prueba)
  var doc = new jsPDF()
  var elementHTML = $('#content').html();
  var specialElementHandlers = {
    '#elementH': function (element, renderer) {
      return true;
    }
  };
  doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
  });
  doc.setFontSize(20)
  //Valor de la esquina para posicion y Texto de encabezado
  doc.text(35, 25, 'Minuta de Reunion')
  //Formato de la imagen  x,x,ancho,alto
  doc.addImage(imgData, 'PNG', 40, 30, 250, 250)
  //guardar datos de input
  document.getElementById('equipo').value;
  document.getElementById('nombre1').value;
  document.getElementById('nombre2').value;
  document.getElementById('nombre3').value;
  document.getElementById('nombre4').value;
  document.getElementById('objetivo').value;
  document.getElementById('orden').value;
  document.getElementById('desarrollo').value;
  document.getElementById('acuerdos').value;
  //guardar
  doc.save('Example.pdf')
}
