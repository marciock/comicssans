<script>
function myLoad(){
	
	
	//document.atualizar.submit();
	

	window.location.href='../?menu=cad_categoria_inserir';

};



</script>

<?php

	
	include_once '../model/conexao.php';
	include_once '../model/crud.php';

	$crud=new Crud();

	



	$categorias[]=$_POST['categoria'];
	$categorias[]=$_POST['descricao'];;

	//trata o arquivo
	$arquivo_temp=$_FILES['miniatura']['tmp_name'];
	$arquivo=str_replace(" ","_",$_FILES['miniatura']['name']);
	$uploaddir="../thumbs/".$arquivo;

	echo $_FILES['miniatura'];
	copy($arquivo_temp,$uploaddir);


	$categorias[]=$arquivo;

	

	//echo $categorias[0];

	//echo $_POST['descricao'];



	$crud->insert("categorias",$categorias);

	echo "<script>myLoad();</script>";

?>