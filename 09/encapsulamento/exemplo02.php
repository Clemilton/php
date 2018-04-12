<?php


class Pessoa{

	public $nome ="Ramus Ledorf";

	protected $idade =48;

	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

class Programador extends Pessoa{

	public function verDados(){

		echo get_class($this);

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

$objeto = new Programador();


$objeto->verDados();

?>