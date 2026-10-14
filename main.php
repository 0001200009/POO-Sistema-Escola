<?php
require_once 'Aluno.php';

$aluno1 = new Aluno("Maria", 20, "Sistemas de Informação");

$aluno1->matricular();

$aluno1->cadastrarNotas(8.5, 7.5);

$aluno1->exibirInformações();

echo "Média individual: " . $aluno1->calcularMedia() . "\n";
$aluno1->verificarAprovacao();

echo "\n--- Testando Cancelamento de Matrícula ---\n";
$aluno1->cancelarMatricula();
$aluno1->cancelarMatricula();
?>