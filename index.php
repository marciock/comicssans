<?php
	
	include_once("model/bootlayout.php");
	include_once("model/bootform.php");
	include_once("model/menu.php");
	include("view/header.php");//cabeçalho

	include_once("model/conexao.php");



		$menu=new Menu($_GET['menu']);
		$menu->show();


	include("view/footer.php");//rodapé



?>