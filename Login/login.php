<?php
session_start();
ob_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  $_SESSION['msg'] = '<span>Você ja está logado</span>';
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="UTF-8"/>
    <meta name="theme-color" content="#f02">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <form action="logar.php" method="POST">
        <h2>Login</h2>
        
        <div class="form-group">
          <input type="text" name="username" placeholder="Username" required/>
        </div>
        
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required/>
        </div>
        
        <input type="submit" name="btn_logar" value="Login"/>
        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
      </form>
    </div>
  </body>
</html>
