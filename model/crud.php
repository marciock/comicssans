<?php
	//include_once "model/conexao.php";
	//include_once 'conexao.php';
	
	class Crud extends Conexao{
//
		

		public function __construct() {
        parent::__construct();
        //$this->open();
    }

		public function insert($tabela,$post){

				
				
				foreach ($post as  $key=>$value) {
					$posts.="'{$value}',";
					
				}

				$ins_posts=substr($posts, 0,-1);
				
				$sql="INSERT INTO {$tabela}  VALUES(DEFAULT,{$ins_posts})";

				$this->query($sql);

				//echo $sql;
		}

		public function update($tabela,$campos,$post,$criteria){

			$conta=count($post);

		//	echo $conta;

			for($i=0;$i<$conta;$i++){



				$db_campos .="'{$campos[$i]}'='{$post[$i]}',";


			}

				//echo $db_campos;
				$ins_posts=substr($db_campos, 0,-1);

				
				//$sql="INSERT INTO {$tabela}  VALUES(DEFAULT,{$ins_posts})";
				$sql="UPDATE  {$tabela} SET  ({$ins_posts})  {$criteria}";

				$this->query($sql);

				echo $sql;
		}

		public function delete($tabela,$criteria){

			$sql = "DELETE FROM {$tabela} {$criteria}";
			$this->query($sql);

		}
	}
?>