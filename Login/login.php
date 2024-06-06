<?php
session_start();
ob_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  header('Location: dashboard.php');
}

include_once("includes/header_html.php");
?>
<div class="container">
  <form action="logar.php" method="POST">
    <h2>Log In</h2>
    
    <div class="form-group">
      <input type="text" name="username" required/>
      <label>Usuário</label>
    </div>
    
    <div class="form-group">
      <input type="password" name="password" required/>
      <label>Senha</label>
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
<?php
include_once("includes/footer_html.php");
?>