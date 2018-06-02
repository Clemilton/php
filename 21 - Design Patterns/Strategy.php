<?php

/**
Com o padrão “Strategy” (Estratégia) voce encapsula famílias específicas de algoritimos 
permitindo com que a classe cliente responsável por instanciar esse algoritimo em particular
não necessite de conhecimento sobre sua implementação atual. Existem várias variações do padrão 
“Strategy” o mais simples deles é apresentado abaixo:

O primeiro bloco de código apresenta uma familia de algorítimos; 
você pode querer uma array serializado, um JSON ou talvez somente um array de dados:

*/

interface OutputInterface
{

    public function load($arrayOfData);
}

class SerializedArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return serialize($arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return json_encode($arrayOfData);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return $arrayOfData;
    }
}

/*

Através do encapsulamento do algoritimo acima você está fazendo seu código de forma limpa e clara 
para que outros desenvolvedores possam facilmente adicionar novos tipos de saída sem que isso afete 
o código cliente.

Você pode ver como cada classe concreta ‘output’ implementa a OutputInterface - isso serve a dois 
propósitos, primeiramente isso prevê um simples contrato que precisa ser obedecido por cada implementação 
concreta. Segundo, através da implementação de uma interface comum você verá na próxima seção que você pode 
utilizar Indução de Tipo para garantir que o cliente que está utilizando esse comportamento é do tipo correto, nesse caso ‘OutputInterface’.

O próximo bloco de código demonstra como uma classe cliente relizando uma chamada deve usar um desses algorítimos e ainda melhor definir o comportamento necessário em tempo de execução:

*/


class SomeClient
{
    private $output;

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput($array)
    {
        return $this->output->load($array);
    }
}

echo "<h1> Design Pattern: Strategy </h1>";



/*
A classe cliente tem uma propriedade private que deve ser definida em tempo de execução e ser do tipo ‘OutputInterface’ uma vez que essa propriedade é definida uma chamada a loadOutput() irá chamar o método load() na classe concreta do tipo ‘output’ que foi definida.

*/

$client = new SomeClient();

$array = [
    "foo" => "bar",
    "bar" => "foo",
];

//Quer um array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput($array);
echo "Array: <br>";
var_dump($data);

// Quer um JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput($array);
echo "<br>";
echo "Json: <br>";
var_dump($data);
