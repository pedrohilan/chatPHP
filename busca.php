<?php 
include 'Model/M_MunPac.php';
$munpac = new M_MunPac("","","");

$result = $munpac->buscar();

while($dados = mysqli_fetch_array($result)) {
			echo "<center>
			<h2>". $dados['nome'] ."</h2>
			<p>". $dados['mensagem'] ."</p>
			</center>";
}


?>
