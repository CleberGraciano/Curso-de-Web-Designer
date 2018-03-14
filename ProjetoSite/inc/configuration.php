<?php
	class Sql {

		public $conn;

		//Classe construtora, primeira Classe a ser chamada, também conhecida como método magico do PHP
		public function __construct() {

			return $this -> conn = mysqli_connect("127.0.0.1", "root", "", "hcode_shop");

		}

		public function query($string_query) {

			
			return mysqli_query($this->conn, $string_query);


		}



		//Clesse que mata a conexão, vamos usar para fechar a conexão com banco de dados
		public function __destruct() {

			mysqli_close($this->conn);

		}




	}


?>