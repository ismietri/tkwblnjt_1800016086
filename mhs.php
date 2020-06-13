<html>
<body>

<?php
	$nim = $_POST['NIM'];
	$nama = $_POST['NAMA'];
	$jenis = $_POST['KELAMIN'];
	$prodi = $_POST['PRODI'];
	$bahasa = $_POST['BAHASA'];
?>	

<table width="600" border="1">
	<tr>
		<td>NIM</td>
		<td><?php  echo $nim; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php  echo $nama; ?></td>
	</td>
	<tr>
		<td>Jenis Kelamin</td>
		<td><?php  echo $jenis; ?></td>
	</tr>
	<tr>
		<td>Program Studi</td>
		<td><?php  echo $prodi; ?></td>
	</tr>
	<tr>
		<td>Bahasa Pemrograman yang dikuasai</td>
		<td><?php  echo $bahasa; ?></td>
	</tr>
</table>
</body>
</html>