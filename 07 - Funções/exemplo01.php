<?php
//Varios parametros
function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2,2);
echo "<br>";

echo soma(2,2,5,25,3);
echo "<br>";



?>