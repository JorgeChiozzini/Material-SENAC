<?php require_once 'session.php'; ?>
<h1>A sua sessão foi iniciada em <?php echo $_SESSION['ultimo_login']?> e você já fez <?php echo $_SESSION['reqs']?> requisições</h1>

<?php 
require 'calculoimc.php';
require 'loginSessao.php';
?>

