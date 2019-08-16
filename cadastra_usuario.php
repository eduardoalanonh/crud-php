<?php
include 'db.php';

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$query = "INSERT INTO USUARIO(usuario, senha) VALUES ('$usuario', '$senha')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');