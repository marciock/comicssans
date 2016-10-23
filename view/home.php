<?php
	$layout=new BootLayout();

	$layout->startDiv("titulo","row");

		$layout->showTag("h1","Edições");
	$layout->endDiv();


$db=new Conexao();

$sql="SELECT * FROM categorias";

$query=$db->query($sql);

$layout->startDiv("coluna1","row");
	while($campos=$query->fetch_object()){


		$layout->circleImage("img/{$campos->miniatura}","{$campos->categoria}","?menu={$campos->categoria}","col-xs-4");
				
			
			
	}
$layout->endDiv();

/*


	$layout=new BootLayout();

	$layout->startDiv("titulo","row");

		$layout->showTag("h1","Edições");
	$layout->endDiv();

	$layout->startDiv("coluna1","row");
		$layout->circleImage("img/batman.jpg","Batman","?menu=batman","col-xs-4");

		$layout->circleImage("img/homem_aranha.jpg","Homem Aranha","?menu=homem_aranha","col-xs-4");

		$layout->circleImage("img/lanterna.jpg","Lanterna","?menu=lanterna","col-xs-4");
	$layout->endDiv();
	

*/


?>


