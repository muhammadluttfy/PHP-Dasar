<?php
//  Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (Jarang digunakan)

// Variabel dan Tipe Data
// variabel
// - tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Muhammad Lutfi";
// echo "Halo, Nama saya $nama";


// Operator
// Aritmatika
// + - * / %

// $x = 10;
// $y = 20;
// echo $x + $y;

// Penggabungan string / concatenation / concat
// .
// $nama_depan = "Muhammad";
// $nama_belakang = "Lutfi";
// echo $nama_depan . " " .$nama_belakang

// Assignment 
// = , += , -=, *= , /=, %= , .= 
// $x = 1;
// $x = 5;
// echo $x;

// $nama = "Muhammad";
// $nama .= " ";
// $nama .= "Lutfi";
// echo $nama;


// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "2");


// Identitas
// ngecek nilai dan TIPE DATA nya
// ===, !==
// var_dump(1 === "1");


// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
