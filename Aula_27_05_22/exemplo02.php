<?php
$numero = [3,5,8,10,20,23,57];

//criar uma função para somar os valores 
//de um vetor 

function soma ($vetor){
    $soma = 0;
    for($i=0;$i<count($vetor);$i++){
        //echo "$vetor[$i] <br>";
        $soma = $soma + $vetor[$i];
        //$soma = $soma + $vetor[$i];
        if ($vetor[$i] % 2 ==1 ) {
        echo "$vetor[$i] <br>";//mostrando somente os números impares dos vetores
          } 
        }
    echo "A soma é : $soma";
}
soma($numero)
?>