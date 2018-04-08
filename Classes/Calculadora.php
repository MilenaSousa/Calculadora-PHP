<?php 

class Calculadora{

	protected $total;
	protected $numero1;
	protected $numero2;

	//Cada vez que o programa for iniciado os atributos acima serão zerados

	function __construct(){
		$this->total = 0;
		$this->numero1 = 0;
		$this->numero2 = 0;
	}


	// Atribuir valores p/ nossos atributos numero1 e numero2
	public function setNumero1($var_numero1){
		// Validaçaõ de Numero
		$this->numero1 = $var_numero1;
	}

	public function setNumero2($var_numero2){
		$this->numero2 = $var_numero2;
	}

	//Operações
	public function somar(){
		$this->total = $this->numero1 + $this->numero2;
		return $this->total;
	}

	public function subtrair(){
		$this->total = $this->numero1 - $this->numero2;
		return $this->total;
	}

	public function multiplicar(){
		$this->total = $this->numero1 * $this->numero2;
		return $this->total;
	}

	public function dividir(){
		$this->total = $this->numero1 / $this->numero2;
		return $this->total;
	}

}




 ?>