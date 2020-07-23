<!DOCTYPE html>
<html>
<head>
	<title>Programa 16</title>
</head>
<body>
	<!-- 
	EL MÉTODO POST ES PARA QUE NO SE VEA EL USUARIO 
	Y LA CONTRASEÑA EN LA PARTE DE LA DIRECCIÓN DE LA PÁGINA.
	-->
	<form action="Controller/Verificar.php" method="POST">
		Nombre 
		<input type="text" id="inputText" name="inputText" placeholder="Escribe un nombre">
		Password 
		<input type="password" id="inputPassword" name="inputPassword" placeholder="Escribe la contrseña">
		
		<input type="submit" value="Verificar">
		
	</form>
</body>
</html>