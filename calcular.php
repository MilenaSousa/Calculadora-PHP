<?php 

require_once("Classes/Calculadora.php");


$numero1  = $_POST['numero1'];
$numero2  = $_POST['numero2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);


switch($operacao){

	case 'somar':
		echo "Resultado: ".$calculadora->somar();
	break;

	case 'subtrair':
		echo "Resultado: ".$calculadora->subtrair();
	break;

	case 'multiplicar':
		echo "Resultado: ".$calculadora->multiplicar();
	break;

	case 'dividir':
		echo "Resultado: ".$calculadora->dividir();
	break;

	default:
		echo "Operação imcompativel";
	break;
}


 ?>