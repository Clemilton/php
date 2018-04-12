<?php

function soma(int ...$valores): string{

	return array_sum($valores);

}
function mult($a ,$b){

	return $a*$b;
}

var_dump(soma(2,2));
echo "<br>";

echo soma(2,2,5,25,3);
echo "<br>";

echo mult(2,3);

?>