
		<?php
			//Capturei as informações do formulário
			$nome = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			
			//Abrindo conexão com o BD
			include('cabecalho_conexão.php');
			
			$SQL = "INSERT INTO usuario (nome, telefone, email, senha) 
					VALUE ('$nome', '$telefone', '$email', '$senha')";
			include('index.php');
			
			include('rodape_conexao.php');
		?>
	