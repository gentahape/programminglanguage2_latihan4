<h1>Form Pegawai</h1>

<?php include('../Config/Csrf.php'); ?>

<?php if ($_GET['action'] == 'add') { ?>

<form action="../Config/Routes.php?action=insertPegawai" method="POST">
<input type="hidden" name="csrf_token" value="<?= createCSRF();?>"/>
	
	<table border="1">
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td><input type="text" name="nip" placeholder="Masukan NIP" required=""></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukan Nama" required=""></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jk" required="">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="tgl_lahir" required=""></td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<a href="pegawai_view.php">Kembali</a>
				<input type="submit" name="proses" value="Simpan">
			</td>
		</tr>
	</table>

</form>

<?php 	
	}elseif ($_GET['action'] == 'edit') { 
		include '../Controllers/PegawaiController.php';
		$dataAll = new PegawaiController();
		$getData = $dataAll->getWhere($_GET['id']);
		while ($data = mysqli_fetch_array($getData)) {
?>

<form action="../Config/Routes.php?action=updatePegawai" method="POST">
<input type="hidden" name="csrf_token" value="<?= createCSRF();?>"/>
<input type="hidden" name="id" value="<?= $_GET['id'] ?>"/>

	<table border="1">
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td><input type="text" name="nip" placeholder="Masukan NIP" required="" value="<?= $data['nip'] ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukan Nama" required="" value="<?= $data['nama'] ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jk" required="">
					<option value="Laki-laki" <?= ($data['jk'] == 'Laki-laki' ? 'selected' : '') ?>>Laki-laki</option>
					<option value="Perempuan" <?= ($data['jk'] == 'Perempuan' ? 'selected' : '') ?>>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="tgl_lahir" required="" value="<?= $data['tgl_lahir'] ?>"></td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<a href="pegawai_view.php">Kembali</a>
				<input type="submit" name="proses" value="Simpan">
			</td>
		</tr>
	</table>

</form>

<?php } } ?>