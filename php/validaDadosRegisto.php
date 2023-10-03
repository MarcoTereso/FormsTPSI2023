<?php

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$welcome  = "Bem vindo ".$nome." ".$apelido;

//echo $welcome;

echo "<script>alert($welcome);</script>";



?>