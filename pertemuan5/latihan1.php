<?php

// Array
// variabel yang dapat menampung banyak nilai
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

// cara lama
$hari = array("Senin", "selasa", "rabu");

// cara baru
$bulan = ["Januari", "Februari"];


// menampilkan array
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";


// menampilkan satu element pada array
// echo $hari[1];


// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
