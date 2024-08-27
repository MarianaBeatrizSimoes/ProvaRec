<?php
$str = $_GET['frase'];
$str = strtoupper($str); /*frase letra maiuscula*/
$caractermeio = substr($str,11,1);
echo "O caracter que está na posição do meio da frase: $caractermeio"."<br>";
$tamanho = strlen($str);
for($i=0;$i<$tamanho;$i++){
    if(($str[$i] == "A") || ($str[$i] == "E") || ($str[$i] == "I") || ($str[$i] == "O") || ($str[$i] == "U")){
       $str[$i] = "X";
   
    }
   
}
echo $str."<br>";
$vogais =0;
$naovogais =0;
for($i=0;$i<$tamanho;$i++){
if($str[$i] == "X"){
    $vogais = $vogais+1;
    }
    else{
        $naovogais = $naovogais+1;
    }
}
echo "Quantidade caracteres que não são vogais: $naovogais"."<br>";
$str2 = substr($str,11,32);
$str2 = strrev($str2);
echo "A nova frase é: $str2"."<br>";
?>