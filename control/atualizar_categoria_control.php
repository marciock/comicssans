<?php

	
	include_once '../model/conexao.php';
	include_once '../model/crud.php';

	$crud=new Crud();

	



	

	if(!empty($_FILES['miniatura'])){
	//trata o arquivo
	$arquivo_temp=$_FILES['miniatura']['tmp_name'];
	$arquivo=str_replace(" ","_",$_FILES['miniatura']['name']);
	$uploaddir="../thumbs/".$arquivo;

	echo $_FILES['miniatura'];
	copy($arquivo_temp,$uploaddir);

	$categorias[]="categoria";
	$categorias[]="descricao";
	//$categorias[]="miniatura";

	$codigo=$_POST['id'];
	$post[]=$_POST['categoria'];
	$post[]=$_POST['descricao'];
	$post[]=$arquivo;

}else{


	$categorias[]="categoria";
	$categorias[]="descricao";
	$categorias[]="miniatura";
	
	$codigo=$_POST['id'];
	$post[]=$_POST['categoria'];
	$post[]=$_POST['descricao'];
	//$post[]=$arquivo;

}

	
	
	//echo $categorias[0];

	//echo $_POST['descricao'];



	$crud->update("categorias",$categorias,$post,"WHERE id_categoria={$codigo}");

?>