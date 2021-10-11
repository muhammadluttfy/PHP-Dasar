<?php
// $mahasiswa = [
//     ["Muhammad Lutfi", "18083000124", "muhammadlutfi@unmer.ac.id", "S1 Sistem Informasi"],
//     ["Ahla Ainin Nafisah", "19302000111", "muhammadlutfi@unmer.ac.id", "Bahasa Arab"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "muhammad Lutfi",
        "nim" => "18083000124",
        "email" => "muhammadlutfi@unmer.ac.id",
        "jurusan" => "S1 Sistem Informasi",
        "gambar" => "22.jpg",
    ],
    [
        "nama" => "Ahla Ainin Nafisah",
        "nim" => "18083000111",
        "email" => "ahlaainan@unmer.ac.id",
        "jurusan" => "S1 Sistem Informasi",
        "gambar" => "1.jpg",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
    ul {
        list-style-type: none;
    }

    ul img {
        height: 100px;
    }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"] ?>">
        </li>
        <li><?= $mhs["nama"] ?></li>
        <li><?= $mhs["nim"] ?></li>
        <li><?= $mhs["email"] ?></li>
        <li><?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach ?>
</body>

</html>