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
    header('Location: dashboard.php');
    
  } else {
    $_SESSION['msg'] = '<span>Usuário ou senha inválido</span>';
    header('Location: /Login');
  }

} else {
  $_SESSION['msg'] = '<span>Preencha todos os campos</span>';
  header('Location: /Login');
}