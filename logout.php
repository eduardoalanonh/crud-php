<?php 
include 'db.php';


session_start();

unset($_SESSION['login']);
unset($_SESSION['USUARIO']);

header('location:index.php');