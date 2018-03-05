<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<LINK REL=StyleSheet HREF="style.css" TYPE="text/css"> <br /><a href="calculadora.php">VOLVER</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<LINK REL=StyleSheet HREF="style.css" TYPE="text/css"> <br /><a href="calculadora.php">VOLVER</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<LINK REL=StyleSheet HREF="style.css" TYPE="text/css"><br /><a href="calculadora.php">VOLVER</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<LINK REL=StyleSheet HREF="style.css" TYPE="text/css"> <br /><a href="calculadora.php">VOLVER</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<LINK REL=StyleSheet HREF="style.css" TYPE="text/css"> <br /><a href="calculadora.php">VOLVER</a>');
	}
?>
