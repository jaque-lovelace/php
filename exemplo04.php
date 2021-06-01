<?php
//Declaração de variáveis

$nome = "Jaqueline Menezes";
$idade = 25;
$valor = 90.52;
$status = true;

echo "Nome: $nome"; 
echo "<br>";

echo "Idade: ", $idade;
echo "<br>";

echo "Valor: ". $valor;
echo "<br>";


echo "Status: {$status}"; //Interpolação
echo "<br>";


//Concatenar várias variáveis

echo "Nome {$nome}, idade : {$idade}";
echo"<br>";

echo "Nome: " . $nome. " , idade : " . $idade;
echo"<br>";


?>