var doc = new jsPDF();
doc.text(20, 20, 'Prueba');
doc.text(20, 30, 'Vamos a generacion de un pdf para pruebas');
// Add new page
doc.addPage();
doc.text(20, 20, 'Prueba Realizada');
// Save the PDF
doc.save('Prueba.pdf');
