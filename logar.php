<?php
require("minit.php");
require("mhtmlspec.php");
$query="SELECT * FROM `usuarios` WHERE `usuario`='$_POST[usuario]' AND `senha`='$_POST[senha]';";
$sql=mysql_query($query);
$ok=mysql_num_rows($sql);

if($ok != 0)
{
    $dados=mysql_fetch_assoc($sql);
    $_SESSION = array_merge($_SESSION, $dados);
    $_SESSION['logado']= true;
    header("location:pautas-atuais.php");
}

else
{
    session_unset();
    session_destroy();
    session_start();
    header("location:pautas-atuais.php");
}
?>
