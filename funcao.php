<?php


$numeros=array(0,1,2,3,4,5);
$array2 = array(8,9,10,11,12);
 Array_push($numeros,6,7);/*Adiciona valores no final da variavel*/
 Array_pop($numeros);/*Remove o ultimo valor da variavel*/
array_unshift($numeros,0,-1);/*Adiciona valores no começo da variavel*/
$numeros = array_merge($numeros,$array2); /*Une dois arrays */
/*$numeros = array_slice($numeros,3,4);*/
sort($numeros);/*ordena a variavel em ordem crescente*/
rsort($numeros);/*Ordena a variavel em ordem decrescente*/

for($i=0;$i < count($numeros);$i++){
echo $numeros[$i]."<br>";

}



?>