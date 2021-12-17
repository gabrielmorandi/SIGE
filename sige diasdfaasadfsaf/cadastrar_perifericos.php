<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$tipo = mysqli_real_escape_string($conexao, $_POST['tipo']);
$marca = mysqli_real_escape_string($conexao, $_POST['marca']);
$computador = mysqli_real_escape_string($conexao, $_POST['computador']);

$query = "insert into perifericos(nome_periferico, tipo_periferico, marca_periferico, computador_periferico) values('{$nome}', '{$tipo}', '{$marca}', '{$computador}')";
$result = mysqli_query($conexao, $query);
header('Location: main.php');