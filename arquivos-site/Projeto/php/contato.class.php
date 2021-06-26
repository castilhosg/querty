<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contato Class</title>
</head>

<body>
	
	<?php
	
		class Contato{
			
			
			private $nome, $email, $telefone, $msg;
			
			public function getNome(){
				
				return $this->nome;
				
			}
			
			public function setNome($n){
				
				$this->nome = $n;
				
			}
			
			public function getEmail(){
				
				return $this->email;
				
			}
			
			public function setEmail($e){
				
				$this->email = $e;
				
			}
			
			public function getTelefone(){
				
				return $this->telefone;
				
			}
			
			public function setTelefone($t){
				
				$this->telefone = $t;
				
			}
			
			public function getMsg(){
				
				return $this->msg;
				
			}
			
			public function setMsg($msg){
				
				$this->msg = $msg;
				
			}
			
		}
	
	?>
	
</body>
</html>