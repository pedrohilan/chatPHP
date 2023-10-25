<!DOCTYPE html>
<html>
<head>
	<title>CHAT</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'busca.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>
<body onload="ajax();">

<div style="height: 2000px;overflow: auto;">
	<form method="POST" action="enviar.php">
		<input type="text" name="nome" placeholder="Nome">
		<input type="text" name="mensagem" placeholder="mensagem">
		<input type="submit" name="enviar" value="Enviar">
	</form>

	<div id="chat">
		
	</div>
</div>

</body>
</html>