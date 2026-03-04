<?php

$valores = [40,22,44,22,53,77,30];

$busca = 30;

$posicao = array_search($busca,$valores);

if($posicao !== false){

    echo "A posição encontrada do indice é $posicao"; 
}else
{
echo " O numero $busca não existe";

}


?>