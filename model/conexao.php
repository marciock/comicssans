<?php
	//require_once "../libs/config.php";
	
        class Conexao extends mysqli{
		
		
		public function __construct(){
			
			parent::__construct("localhost","root","123","comicsans");

			if(mysqli_connect_error()){
				die("Erro de Conexão(".mysql_connect_errno().")".mysqli_connect_error());
			}
			
			
			
		}

		
		
	
		
		
	}

?>