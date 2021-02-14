<?php
	$id = $_GET['id'];
	
	include('cabecalho_conexão.php');
	
	$SQL = "DELETE FROM usuario WHERE id=$id";

	include('rodape_conexao.php');
	
	header('location:listausuarios.php');
?>