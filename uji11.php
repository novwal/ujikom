<?php

function tampilDataSiswa($nama, $nis, $rayon, $kelas) {
    echo "Nama: " . $nama . "<br>";
    echo "NIS: " . $nis . "<br>";
    echo "Rayon: " . $rayon . "<br>";
    echo "Kelas: " . $kelas . "<br><br>";
}

$siswa = array(
    array(
        "nama" => "Abi",
        "nis" => "1234567",
        "rayon" => "wk3",
        "kelas" => "X-1"
    )
   
);

foreach ($siswa as $s) {
    tampilDataSiswa($s["nama"], $s["nis"], $s["rayon"], $s["kelas"]);
}

?>
