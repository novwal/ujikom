<?php

function aritmatika($a, $b, $c) {
  echo "Angka 1: " . $a . "<br>";
  echo "Angka 2: " . $b . "<br>";
  echo "Angka 3: " . $c . "<br>";
  
  $tambah = $a + $b + $c;
  $kurang = $a - $b - $c;
  $kali = $a * $b * $c;
  $bagi = $a / $b / $c;
  $modulus = $a % $b % $c;
  
  echo "Hasil Pertambahan: " . $tambah . "<br>";
  echo "Hasil Pengurangan: " . $kurang . "<br>";
  echo "Hasil Perkalian: " . $kali . "<br>";
  echo "Hasil Pembagian: " . $bagi . "<br>";
  echo "Hasil Modulus: " . $modulus . "<br>";
}

aritmatika(10, 8, 5);
?>
