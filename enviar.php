<?php 
include 'Model/M_MunPac.php';
$munpac = new M_MunPac("","","");

$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

$munpac->inserirMsg($nome, $mensagem);

header("location: index.php");

?>