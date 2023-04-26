<?php
session_start();
ob_start();

unset($_SESSION['username'], $_SESSION['password']);
$_SESSION['msg'] = '<span>Você deslogou</span>';
header('Location: /Login');
?>