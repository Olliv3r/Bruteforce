<?php
session_start();
ob_start();
unset($_SESSION['username'], $_SESSION['password']);
$_SESSION['msg'] = '<div class="alert alert-success" role="alert">Você deslogou</div>';
header('Location: login.php');
?>