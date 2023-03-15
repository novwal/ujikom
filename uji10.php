<?php
$siswa = array(
    array(
        "nama" => "Abi",
        "nis" => "123456",
        "rayon" => "wk3",
        "kelas" => "X-1"
    )
);

foreach ($siswa as $s) {
    echo "Nama: " . $s["nama"] . "<br>";
    echo "NIS: " . $s["nis"] . "<br>";
    echo "Rayon: " . $s["rayon"] . "<br>";
    echo "Kelas: " . $s["kelas"] . "<br><br>";
}

?>
