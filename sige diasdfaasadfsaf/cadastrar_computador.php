<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$cpu = mysqli_real_escape_string($conexao, $_POST['cpu']);
$gpu = mysqli_real_escape_string($conexao, $_POST['gpu']);
$ram = mysqli_real_escape_string($conexao, $_POST['ram']);
$hd = mysqli_real_escape_string($conexao, $_POST['hd']);
$os = mysqli_real_escape_string($conexao, $_POST['os']);

$query = "insert into computadores(nome_computador, cpu_computador, gpu_computador, ram_computador, hd_computador, os_computador) values('{$nome}', '{$cpu}', '{$gpu}', '{$ram}', '{$hd}', '{$os}')";
$result = mysqli_query($conexao, $query);
header('Location: main.php');