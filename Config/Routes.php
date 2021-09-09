<?php 

	include 'Csrf.php';
	include '../Controllers/PegawaiController.php';

	$dbPegawai = new PegawaiController();
	
	$action = $_GET['action'];

	if ($action == 'insertPegawai') {
		
		if(validation() == TRUE){
		    $dbPegawai->insert(
		        $_POST['nip'],
		        $_POST['nama'],
		        $_POST['jk'],
		        $_POST['tgl_lahir']
		    );
		}
		header("location:../Views/pegawai_view.php");

	}elseif ($action == 'updatePegawai') {
		
		if(validation() == TRUE){
		    $dbPegawai->update(
		        $_POST['id'],
		        $_POST['nip'],
		        $_POST['nama'],
		        $_POST['jk'],
		        $_POST['tgl_lahir']
		    );
		}
		header("location:../Views/pegawai_view.php");

	}elseif ($action == 'deletePegawai') {

		$dbPegawai->delete(
		    $_GET['id']
		);
		header("location:../Views/pegawai_view.php");

	} else {
		header("location:../Views/pegawai_view.php");
	}
	
