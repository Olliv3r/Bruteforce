<?php
session_start();
ob_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
  $_SESSION['msg'] = '<span>Você não está logado</span>';
  header('Location: login.php');
}
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
echo '<h1><b></b>Bem vindo: root</b></h1>';
echo "<br><a href='logout.php'>Sair</a>";