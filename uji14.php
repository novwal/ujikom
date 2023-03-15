<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<form action="" method="POST">
		<label for="nis">NIS:</label>
		<input type="text" id="nis" name="nis"><br>

		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br>

		<label for="rayon">Rayon:</label>
		<input type="text" id="rayon" name="rayon"><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
		$nis = $_POST["nis"];
		$nama = $_POST["nama"];
		$rayon = $_POST["rayon"];

		echo "<h2>Hasil Input Data:</h2>";
		echo "NIS: " . $nis . "<br>";
		echo "Nama: " . $nama . "<br>";
		echo "Rayon: " . $rayon . "<br>";
	}
?>