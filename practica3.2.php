<!DOCTYPE html>
<html>
<head> 
	<title>Problema</title>
</head>
<body>
<?php
$suma=0;
foreach ($_RESQUEST as $clave => $valor) {
	echo "Valor:".$valor;
	echo "<br>";
	$suma=$suma + $valor;
}
echo "La suma es:".$suma;
?>
</body>
</html>