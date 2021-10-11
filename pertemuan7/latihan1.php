<?php
// $_GET
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
    <title>GET</title>

    <style>
    ul img {
        height: 100px;
    }
    </style>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>

    <ol>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a
                href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                <?= $mhs["nama"]; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ol>

</body>

</html>