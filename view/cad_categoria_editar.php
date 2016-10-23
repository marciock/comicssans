<script type="text/javascript">
	
	function salvar(){
		document.getElementById("formu").submit();
	}
</script>

<?php
	$form=new BootForm();

	$db=new Conexao();


	$id=$_POST['lista'];


	$sql="SELECT * FROM categorias WHERE id_categoria={$id}";

	$query=$db->query($sql);

	while($campos=$query->fetch_object()){

		$myID=$campos->id_categoria;
		$categoria=$campos->categoria;
		$descricao=$campos->descricao;
		$miniatura=$campos->miniatura;

	}

	$form->startDiv("titulo","row");
		$form->showTag("h2","Nova Categoria");
	$form->endDiv();
	
	$form->startDiv("formulario","row");
		$form->startDiv("formulario","col-xs-4");
		$form->form("formu","formu","control/atualizar_categoria_control.php","post","enctype=multipart/form-data");	
			$form->input("hidden","id","id", $id,"","id","");
			$form->input("text","categoria","categoria", $categoria,"","categoria","Categoria: ");
			$form->input("text","descricao","descricao", $descricao,"","descricao","Descrição: ");
			$form->input("text","miniatura","miniatura", $miniatura,"disabled","","Miniatura: ");
			$form->input("file","miniatura","miniatura", "","","miniatura"," ");


			

		$form->endDiv();
	
	
		$form->startDiv("formulario","col-xs-4");

			$form->circleImage("img/salvar.png","Salvar","javascript:salvar()","col-xs-6");

			$form->circleImage("img/cancelar.png","Cancelar","?menu=categoria","col-xs-6");
		$form->endForm();

		$form->endDiv();

	


?>