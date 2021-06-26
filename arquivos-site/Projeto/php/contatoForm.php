<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contato Form</title>
</head>

<body>
	
	<?php
	
		include ('conexao.php');
		include ('contato.class.php');
	
		$nome = $_POST['nome'];
	
		$tel = $_POST['tel'];
	
		$email = $_POST['email'];
	
		$msg = $_POST['mensagem'];
	
		$verificacao = $_POST['verificacao'];
	
		$c = new Contato();
	
		$c -> setNome($nome);
		$c -> setEmail($email);
		$c -> setTelefone($tel);
		$c -> setMsg($msg);
	
		$sql = "INSERT INTO contato(nome, email, telefone, mensagem) VALUES ('".$c->getNome()."', '".$c->getEmail()."', '".$c->getTelefone()."', '".$c->getMsg()."')";
	
		if ($conn->query($sql)==true){
			
			echo "<script language='javascript' type='text/javascript'>

			alert('Mensagem enviada com sucesso!');

			window.location.href='../contato.html';</script>";			

			die();
			
		}else{
			
			echo "Erro: ".$sql."<br/>".$conn->error;
			
			echo "<br/>";
			
			echo "Não foi possível enviar sua mensagem.";
			
			echo "<br/>";
			
			echo "Tente novamente mais tarde.";
		}
	
		//Finaliza a conexão com o banco
		$conn -> close();
	
	
	?>
	
</body>
</html>