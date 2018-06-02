<?php

/*
	O código abaixo implementa o padrão “Singleton” usando uma variável estática e o método estático de criação getInstance(). Note o seguinte:
		- O construtor __construct é declarado como protegido para prevenir que uma nova instância seja criada fora dessa classe pelo operador new.
		- O método mágico __clone é declarado como privado para prevenir a clonagem dessa instância da classe pelo operador clone.
		- O método mágico __wakeup é declarado como privado para prevenir a desserialização de uma instância dessa classe pela função global unserialize().
		- Uma nova instância é criada via late static binding no método de criação getInstance() declarado como estático. Isso permite a criação de classes “filhas” da classe Singleton no exemplo
	
	O padrão Singleton é útil quando você precisa garantir que somente uma instância da classe seja criada em todo o ciclo de vida da requisição em uma aplicação web. Isso tipicamente ocorre quando você tem objetos globais (tais como uma classe de Configuração) ou um recurso compartilhado (como uma lista de eventos).

	Você deve ser cauteloso quando for usar o padrão “Singleton” já que pela sua própria natureza ele introduz um estado global na sua aplicação reduzindo a possibilidade de realização de testes. Na maioria dos casos Injeção de Dependências pode (e deve) ser usado no lugar de uma classe do tipo Singleton. Usar Injeção de Dependências significa não introduzir acoplamento desnecessário no design da sua aplicação, já que o objeto usando o recurso global ou compartilhado não necessita de conhecimento sobre uma classe concretamente definida.

*/
class Singleton{

	/**
     * Retorna uma instância única de uma classe.
     *
     * @staticvar Singleton $instance A instância única dessa classe.
     *
     * @return Singleton A Instância única.
     */

    public static function getInstance(){
    	static $instance =null;

    	if(null===$instance){
    		$instance = new static();
    	}

    	return $instance;
    }

    /**
     * Construtor do tipo protegido previne que uma nova instância da
     * classe seja criada com o operador 'new' fora da classe.
    **/

    protected function __construct(){

    }

    /** 
    * Método clone do tipo privado previne a clonagem dessa instância 
	* da classe.
	* @return void
	*/
	private function __clone(){}


	/**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup(){}

}

echo "<h1> Design Pattern: Singleton </h1>";
class SingletonChild extends Singleton{}

$obj = Singleton::getInstance();

var_dump($obj === Singleton::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();

var_dump($anotherObj === Singleton::getInstance());      // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)


