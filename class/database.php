<?php
	class Database{
	
		private $conn;
		
		//Method Untuk Menghubungkan ke Database
		public function connect(){
			$this->conn = new mysqli("localhost","horison","root","");
			return $this->conn;
		}
		
		//Method Untuk Memutuskan Koneksi dengan Databse
		public function close(){
			return $this->conn->close();
		}
	}
?>