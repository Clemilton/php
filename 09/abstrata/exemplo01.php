<?php


interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($velocidade);

}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){

		echo "O veiculo acelerou ate ".$velocidade. " km/h";
	}

	public function frenar($v){
		echo "O veiculo frenou ate ".$v. "km/h";

	}

	public function trocarMarcha($marcha){
		echo "O veiculo engatou a marcha ".$marcha;
	}

}

class DelRey extends Automovel{

	public function empurrar(){


	}
}

$carro = new DelRey();

$carro->acelerar(200);

?>