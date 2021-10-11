<?php
$mahasiswa = [
    ["Muhammad Lutfi", "18083000124", "Sistem Informasi", "lutfi@gmail.com"],
    ["Ahla AInin Nafisah", "19083000005", "Jurusan bahsa kalbu", "ahla@gmail.com"],
    ["Muhammad Akmal", "20083000133", "Bahasa suka suka ahla ainin nafisah ahh", "akmal@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswaul</h1>


    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NIM : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>