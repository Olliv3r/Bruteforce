<?php
session_start();
ob_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
  $_SESSION['msg'] = '<span>Você não está logado</span>';
  header('Location: /Login');
}

include_once("includes/header_html.php");
?>

<div class="painel">
  <h2>Bem vindo: <?= $_SESSION['username'];?></h2>
  <a href='logout.php'>Sair</a>
</div>

<?php
include_once("includes/footer_html.php");
?>