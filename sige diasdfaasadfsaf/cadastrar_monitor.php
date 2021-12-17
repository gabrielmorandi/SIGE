<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$marca = mysqli_real_escape_string($conexao, $_POST['marca']);
$resolucao = mysqli_real_escape_string($conexao, $_POST['resolucao']);
$frequencia = mysqli_real_escape_string($conexao, $_POST['frequencia']);
$tempo = mysqli_real_escape_string($conexao, $_POST['tempo']);
$computador = mysqli_real_escape_string($conexao, $_POST['computador']);

$query = "insert into monitores(nome_monitor, marca_monitor, resolucao_monitor, frequencia_monitor, tempo_monitor, computador_monitor) values('{$nome}', '{$marca}', '{$resolucao}', '{$frequencia}', '{$tempo}', '{$computador}')";
$result = mysqli_query($conexao, $query);
header('Location: main.php');