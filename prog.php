<?php

// Define a data de nascimento inicial
$dataNascimento = '2006-10-09'; // Data de nascimento inicial

// Obtem a data atual
$dataAtual = date('Y-m-d');

// Calcula a diferença em anos desde 09/10/2006
$anos = date('Y', strtotime($dataAtual)) - date('Y', strtotime($dataNascimento));

// Cria a nova data de nascimento adicionando os anos à data inicial
$novaDataNascimento = date('Y-m-d', strtotime($dataNascimento . ' +' . $anos . ' years'));

// Exibe a nova data de nascimento
echo "Nova data de nascimento: " . $novaDataNascimento;

?>
