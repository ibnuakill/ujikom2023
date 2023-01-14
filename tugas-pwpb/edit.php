<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$tampil = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
	while($hasil = mysqli_fetch_array($tampil)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NIS</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
						<input type="number" name="nis" value="<?php echo $hasil['nis']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $hasil['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" value="<?php echo $hasil['kelas']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>