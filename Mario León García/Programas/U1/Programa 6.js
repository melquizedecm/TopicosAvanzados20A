function CIVA(){
	
	var V=document.getElementById('inputValor').value;
	var IVA= document.getElementById('inputIVA').value;
	if(isNaN(V) || isNaN (IVA)){
		alert("El valor no es númerico")
	}
	else{
		V=parseFloat(V);
		iva=parseFloat(IVA)
	}
	
	total=((V*IVA)/100)+V;
	document.getElementById('inputTotal').value=total;
    alert (suma);


}