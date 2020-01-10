<?php
session_start();
unset($_SESSION['professor_logado']);
session_destroy();
?>
<script>alert('Usuário deslogado!');</script>
<script>location.href='login.php';</script> 
<?php exit('Redirecionando...'); ?>