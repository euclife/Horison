<?php
if(  !class_exists('database') ) {
	require('database.php');
}

class user{
	public $id_user;
	public $images;
	public $username;
	public $password;
	public $nama;
	public $id_user_role;
	public $jabatan;
	public $nomor_telp;

	//Method Untuk Menampilkan semua data 
	public function getData(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM user";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}

	public function getLogin(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM user WHERE username='{$this->username}' AND password='{$this->password}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}
	
	
	//Method Untuk menampilkan data berdasarkan ketentuan
	public function getDetail($id_user){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM user where id_user = '{$id_user}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}
	
	public function create() {
		$db = new Database();
			//membuka koneksi
		$dbConnect = $db->connect();
		
			//query menyimpan data 
		$sql = "INSERT INTO user
		(
		id_user,
		images,
		username,
		password,
		nama,
		id_user_role,
		jabatan,
		nomor_telp
		)
		VALUES
		(
		'{$this->id_user}',
		'{$this->images}',
		'{$this->username}',
		'{$this->password}',
		'{$this->nama}',
		'{$this->id_user_role}',
		'{$this->jabatan}',
		'{$this->nomor_telp}'
		)";
				//eksekusi query di atas
		$data = $dbConnect->query($sql);
		
				//menampung error simpan data
		$error = $dbConnect->error;
		
				//menutup koneksi
		$dbConnect = $db->close();
		
				//mengembalikan nilai error
		return $error;
	}

	public function update() {
		$db = new Database();
				//membuka koneksi
		$dbConnect = $db->connect();
		
				//query menyimpan data 
		$sql = "UPDATE tb_user
		set	
		images='{$this->images}',
		password='{$this->password}',
		username='{$this->username}', 
		nama='{$this->nama}', 
		id_user_role='{$this->id_user_role}', 
		jabatan='{$this->jabatan}', 
		nomor_telp='{$this->nomor_telp}'

		where id_user='{$this->id_user}'
		";
				//eksekusi query di atas
		$data = $dbConnect->query($sql);
		
				//menampung error simpan data
		$error = $dbConnect->error;
		
				//menutup koneksi
		$dbConnect = $db->close();
		
				//mengembalikan nilai error
		return $error;
	}

	public function delete(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "DELETE FROM user WHERE id_user = '{$this->id_user}'";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;
	}
}
?>