<?php
# Strings


# Para unir duas ou mais strings em PHP, usamos o operador de concatenação.
$nome = "Jéssica";
$sobrenome = "Sampaio";

echo $nome." ".$sobrenome; // Saída: Jéssica Sampaio
echo "<br>";

# Para obter o comprimento de uma string em PHP, usamos a função strlen()
$texto = "Olá, mundo!";
echo strlen($texto); // Saída: 12
echo "<br>";

# Para substituir partes de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa do rei";
$novo_texto = str_replace("rato", "gato", $texto);
echo $novo_texto; // Saída: O gato roeu a roupa do rei.
echo "<br>";

# strtolower(): Converte uma string para letras minúsculas.
# strtoupper(): Converte uma string para letras maiúscula.
$texto = "Olá, mundo!";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);

echo $texto_minusculo;
echo "<br>";

echo $texto_maiusculo;
echo "<br>";

echo $texto;



?>