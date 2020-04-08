<?php
class Pessoa{
	public $nome ="Clemilton Pereira";
	protected $idade =27;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

/*
1º situação
$objeto = new Pessoa();

#atributo publico
echo $objeto->nome.'<br/>';

#atributo protegido -> classes filhas
echo $objeto->idade.'<br/>';

#atributo privado
echo $objeto->senha.'<br/>'
*/

/* 2º situação*/
$objeto = new Pessoa();

$objeto->verDados();
?>
