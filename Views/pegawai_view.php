<h1>Daftar Pegawai</h1>

<?php

	include '../Controllers/PegawaiController.php';
	$pegawai = new PegawaiController();
	$getData = $pegawai->get();

?>

	<a href="pegawai_form.php?action=add">Tambah</a>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Aksi</th>
		</tr>

		<?php 
			$no = 1;
			while ($data = mysqli_fetch_array($getData)) {
		?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $data['nip'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['jk'] ?></td>
			<td><?= $data['tgl_lahir'] ?></td>
			<td>
				<a href="pegawai_form.php?action=edit&id=<?= $data['id'] ?>">Edit</a> | 
				<a href="../Config/Routes.php?action=deletePegawai&id=<?= $data['id'] ?>">Hapus</a>
			</td>
		</tr>
		<?php $no++; } ?>

	</table>	

