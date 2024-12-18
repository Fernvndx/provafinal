<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action='home.php' method="get">
  Numero 1: <input type="text" name="num"><br>
  <input type="submit">
 </form>
 
 <?php

$raio = 5; 

$perimetro = 2 * M_PI * $raio;
$area = M_PI * pow($raio, 2);


echo "Raio do círculo: " . $raio . "\n";
echo "Perímetro (Circunferência): " . $perimetro . "\n";
echo "Área: " . $area . "\n";
?>

<?php
// Definindo as 3 notas do aluno
$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;

// Calcula a média das 3 notas
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibe o resultado
echo "Nota 1: " . $nota1 . "\n";
echo "Nota 2: " . $nota2 . "\n";
echo "Nota 3: " . $nota3 . "\n";
echo "A média do aluno é: " . $media . "\n";
?>

<?php
// Definindo a temperatura em Fahrenheit
$fahrenheit = 33; // Temperatura fixa de 33°F


$celsius = (5 * ($fahrenheit - 32)) / 9;


echo "Temperatura em Fahrenheit: " . $fahrenheit . "°F\n";
echo "Temperatura em Celsius: " . $celsius . "°C\n";
?>
<?php

echo "Digite a temperatura em graus Celsius: ";
$celsius = (float) fgets(STDIN);


$fahrenheit = (9 * $celsius / 5) + 32;


echo "Temperatura em Celsius: " . $celsius . "°C\n";
echo "Temperatura em Fahrenheit: " . $fahrenheit . "°F\n";
?>


 ?>
 </body>
</html>

