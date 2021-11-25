<?php

    include "connect.php";

    $tgl = $_POST['tgl'];

    $truncate = mysqli_query($connect, "TRUNCATE TABLE countdown");
    $query = mysqli_query($connect, "INSERT INTO countdown VALUES('$tgl')");

    if ($truncate AND $query) {
        echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?pengaturan';</script>";
    } else {
        echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?pengaturan';</script>";
    }