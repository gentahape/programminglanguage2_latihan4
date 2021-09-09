<?php 

/**
 * 
 */
class PegawaiController
{
	
	function __construct()
	{
		include '../Models/PegawaiModel.php';
		$this->PegawaiModel = new PegawaiModel();
	}

	public function get()
	{
		return $this->PegawaiModel->getData();
	}

	public function insert($nip,$nama,$jk,$tgl_lahir)
	{
		return $this->PegawaiModel->insertData($nip,$nama,$jk,$tgl_lahir);
	}

	public function getWhere($id)
	{
		return $this->PegawaiModel->getDataWhere($id);
	}

	public function update($id,$nip,$nama,$jk,$tgl_lahir)
	{
		return $this->PegawaiModel->updateData($id,$nip,$nama,$jk,$tgl_lahir);
	}

	public function delete($id)
	{
		return $this->PegawaiModel->deleteData($id);
	}

}