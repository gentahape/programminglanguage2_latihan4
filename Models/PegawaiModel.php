<?php 

/**
 * 
 */
class PegawaiModel
{
	
	function __construct()
	{
		include '../Config/Database.php';
		$this->db = new Database();
		$this->conn = $this->db->connect();
	}

	public function getData()
	{
		return mysqli_query($this->conn, "SELECT * FROM pegawai");
	}

	public function insertData($nip,$nama,$jk,$tgl_lahir)
	{
		return mysqli_query($this->conn, "INSERT INTO pegawai (nip,nama,jk,tgl_lahir) VALUE ('$nip','$nama','$jk','$tgl_lahir')");
	}

	public function getDataWhere($id)
	{
		return mysqli_query($this->conn, "SELECT * FROM pegawai WHERE id = '$id'");
	}

	public function updateData($id, $nip,$nama,$jk,$tgl_lahir)
	{
		return mysqli_query($this->conn, "UPDATE pegawai SET nip = '$nip', nama = '$nama', jk = '$jk', tgl_lahir = '$tgl_lahir' WHERE id = '$id'");
	}

	public function deleteData($id)
	{
		return mysqli_query($this->conn, "DELETE FROM pegawai WHERE id = '$id'");
	}

}