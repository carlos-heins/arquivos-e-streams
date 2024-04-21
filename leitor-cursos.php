<?php 

// Objetivo: Ler o arquivo todo

$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

// outra forma de fazer:
$cursos = file_get_contents('lista-cursos.txt');

echo $cursos;

// E ainda podemos ler cada linha para um array:

$cursos = file('lista-cursos.txt');
var_dump($cursos);
exit();