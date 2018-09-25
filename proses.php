<form action="" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="baca">Membaca Novel</td>
			<td><input type="checkbox" name="hobi[]" value="musik">Bermusik</td>
			<td><input type="checkbox" name="hobi[]" value="travelling">Travelling</td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$hobi = $_POST['hobi'];
	}
?>