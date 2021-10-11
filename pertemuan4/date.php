<?php

// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");


// time
// UNIX Timestamp / POCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();

// echo date("l M Y", time() - 60 * 60 * 24 * 100);


// mktime
// membuat sendirik detik
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 01, 31, 2001));


// strtotime
echo date("l", strtotime("31 Aug 2001"));
