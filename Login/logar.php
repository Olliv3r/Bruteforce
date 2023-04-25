<?php
session_start();
ob_start();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$username = "root";
$password = "toor";

if (isset($dados['btn_logar'])) {
  if ($dados['username'] == $username && $dados['password'] == $password) {
    $_SESSION['username'] = 'root';
    $_SESSION['password'] = 'toor';
    header('Location: index.php');
    
  } else {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Usuário ou senha inválido</div>';
    header('Location: login.php');
  }

} else {
  $_SESSION['msg'] = '<div class="alert alert-warning" role="alert">Preencha todos os campos</div>';
  header('Location: login.php');
}