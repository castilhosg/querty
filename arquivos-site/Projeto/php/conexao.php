<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexão Banco</title>
</head>

<body>
	
	<?php
	
		$host = 'localhost'; /*Endereço do servidor - como estamos usando o XAMPP, ele fica no localhost*/
		$user = 'root'; //Nome do usuário - padrão é root
		$senha = ''; //Senha do usuário - padrão é vazio, não ter
		$banco = 'projeto_querty'; //Nome do banco de dados
	
		/*A função MYSQLI permite acessar servidores de banco de dados MYSQL (i - improved - melhorado)*/
	
		$conn = new mysqli($host, $user, $senha, $banco);
	
		if ($conn->connect_error){
			
			die("Falha na conexão: ".$conn->connect_error);
	
		}
	
	?>
	
</body>
</html>