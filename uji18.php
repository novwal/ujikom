<?php

$conn = mysqli_connect("localhost","root", "","latihan_xpplg");
$sql = "SELECT * FROM barang";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
          <th>sapu</th>
          <th>aksi</th>
          </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["sapu"] . "</td>";
        echo "<td>" . $row["aksi"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data";
}


$query = "DELETE FROM barang WHERE id = '$id' ";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script> alert('Data berhasil dihapus')
    window.location.href = 'uji17.php';</script>";
} else{
    echo"<script>aler ('Data gagal dihapus')
    windw.location.href =  'uji18.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="uji17.php">hapus</a>
</body>
</html>
