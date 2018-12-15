<?php
if(  !class_exists('database') ) {
	require('database.php');
}

class tamu{
	public $id_tamu;
	public $prefix;
	public $nama_depan;
	public $nama_belakang;
	public $tipe_identitas;
	public $nomor_identitas;
	public $warga_negara;
	public $alamat_jalan;
	public $alamat_kabupaten;
	public $alamat_provinsi;
	public $nomor_telp;
	
		//Method Untuk Menampilkan semua data 
	public function getData(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM penduduk";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}

	public function getLogin(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM tb_user WHERE id_tamu='{$this->id_tamu}' AND password='{$this->password}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}
	
	
		//Method Untuk menampilkan data berdasarkan ketentuan
	public function getDetail($id_tamu){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM tb_user where id_tamu = '{$id_tamu}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}
	
	public function create() {
		$db = new Database();
			//membuka koneksi
		$dbConnect = $db->connect();
		
			//query menyimpan data 
		$sql = "INSERT INTO tb_user
		(
		id,
		id_tamu,
		password,
		email,
		nama
		)
		VALUES
		(
		'{$this->id}',
		'{$this->id_tamu}',
		'{$this->password}',
		'{$this->email}',
		'{$this->nama}'
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
	set	ad_id_tamu='{$this->id_tamu}', password='{$this->password}',
	email='{$this->email}', nama='{$this->nama}' where ad_id='{$this->id}'
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
}
?>