<!DOCTYPE html>
<html>
	<head>
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css">
		<title>CALCULADORA</title>
	</head>
	<body>
		<center>
		<h1 class="caja">Calculadora</h1>
		<div class="form-style-9">
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo n&uacute;mero:<br />
			<input type="text" name="valor2"><br>
			<br>
			<button class="boton_borrar" type="reset" value="Borrar">BORRAR</button>
			<button class="boton_enviar" type="submit" value="Enviar">ENVIAR</button>
		</form>
		</div>
		</center>
	</body>
</html>
