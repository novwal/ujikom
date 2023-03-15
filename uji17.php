<?php
$conn = mysqli_connect("localhost","root", "","latihan_xpplg");
$sql = "SELECT * FROM barang";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
          <th>sapu</th
          </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["sapu"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data";
}

?>