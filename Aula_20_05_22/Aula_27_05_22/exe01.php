<?php
echo "1-Função sem retorno e sem parametros <br>";
function teste (){
    echo "Letícia França";
}
teste();
echo"<hr>";
echo "2-Função com retorno e sem parametros <br>";
    function teste2(){
        $retorno = "Outro texto";
        return $retorno;
    }
$recebe=teste2();
echo "$recebe <br>";
//echo "$retorno";erro poi a variavel é
echo "<hr>";

echo "3-Função sem retorno e com parametros <br>";
function teste3(){
echo "Letícia França";
}
teste();
echo "<hr>";

echo "4-Função com retorno e com parametros <br>";
function teste4 ($x,$y){
    $soma = $x + $y;
    return $soma;
}
$resultado = teste4(10,20);
echo "A soma é: $resultado";
echo "<hr>"
?>