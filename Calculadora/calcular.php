<?php
if(isset($_POST['submit'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacion = $_POST['operacion'];
	switch($operacion){
		case "sumar":
			$resultado = $num1 + $num2;
			break;
		case "restar":
			$resultado = $num1 - $num2;
			break;
		case "multiplicar":
			$resultado = $num1 * $num2;
			break;
		case "dividir":
			if($num2 != 0){
				$resultado = $num1 / $num2;
			}else{
				echo "No se puede dividir entre cero.";
				exit();
			}
			break;
		default:
			echo "Operación no válida.";
			exit();
	}
	echo "El resultado es: ".$resultado;
}
?>
