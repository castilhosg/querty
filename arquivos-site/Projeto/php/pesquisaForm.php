<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pesquisa Form</title>
</head>

<body>
	
	<?php
	
	include ('conexao.php');
	include ('pesquisa.class.php');
	
	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$pg1 = $_POST['pg1'];
	$pg2 = $_POST['pg2'];
	$pg3 = $_POST['pg3'];
	$pg4 = $_POST['pg4'];
	$pg5 = $_POST['pg5'];
	$pg6 = $_POST['pg6'];
	$pg7 = $_POST['pg7'];
	$pg8 = $_POST['pg8'];
	$pg9 = $_POST['pg9'];
	$mensagem = $_POST['mensagem'];
	
	$p = new Pesquisa();
	
	$p -> setNome($nome);
	$p -> setEmail($email);
	$p -> setPg1($pg1);
	$p -> setPg2($pg2);
	$p -> setPg3($pg3);
	$p -> setPg4($pg4);
	$p -> setPg5($pg5);
	$p -> setPg6($pg6);
	$p -> setPg7($pg7);
	$p -> setPg8($pg8);
	$p -> setPg9($pg9);
	$p -> setMensagem($mensagem);
	
	$sql = "INSERT INTO pesquisa(nome, genero, email, pg1, pg2, pg3, pg4, pg5, pg6, pg7, pg8, pg9, mensagem) VALUES ('".$p->getNome()."', '".$p->getGenero()."', '".$p->getEmail()."', '".$p->getPg1()."', '".$p->getPg2()."', '".$p->getPg3()."', '".$p->getPg4()."', '".$p->getPg5()."', '".$p->getPg6()."', '".$p->getPg7()."', '".$p->getPg8()."', '".$p->getPg9()."', '".$p->getMensagem()."')";
	
	if ($conn->query($sql)==true){
			
			echo "<script language='javascript' type='text/javascript'>

			alert('Muito obrigado por completar a pesquisa!');

			window.location.href='../obrigado.html';</script>";			

			die();
			
		}else{
			
			echo "Erro: ".$sql."<br/>".$conn->error;
			
			echo "<br/>";
			
			echo "Não foi possível completar a pesquisa.";
			
			echo "<br/>";
			
			echo "Tente novamente mais tarde.";
		}
	
		$conn -> close();
	
	?>
	
</body>
</html>