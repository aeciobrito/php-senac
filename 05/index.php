<?php
//// INTRODUÇÃO A ARRAYS EM PHP

// Definição de Arrays
$frutas = array("Maçã", "Banana", "Laranja", "Morango");
$numeros = [1, 2, 3, 4, 5];
$alunos = array("João" => 18, "Maria" => 20, "Pedro" => 19);

// Acessando Elementos do Array
echo "A segunda frunta é: " . $frutas[1] . "<br>";
echo "O terceiro número é: " . $numeros[2] . "<br>";
echo "A idade de João é: " . $alunos["João"] . " anos. <br>";

// Alterar Elementos do Array
$frutas[0] = "Pera";
$numeros[4] = 10;
$alunos["Maria"] = 21;

// Adicionando Elemntos ao Array
$frutas[] = "Abacaxi";
$numeros = 6;
$alunos["Ana"] = 22;

// Percorrendo um Array com o foreach


?>