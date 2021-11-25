<?php

    include "connect.php";

    if (isset($_GET['yes'])) {
        
        $no_pendf = $_GET['no_pendf'];

        $query = mysqli_query($connect, "UPDATE pendaftar SET id=id, nama=nama, kelamin=kelamin, tgl_lhr=tgl_lhr, agama=agama, alamat=alamat, id_berkas=id_berkas, id_nilai=id_nilai, status='1'");
        
        if ($query) {
            echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?monitoring';</script>";
        } else {
            echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?monitoring';</script>";
        }
        
    } else {
        
        $no_pendf = $_GET['no_pendf'];
        $idberkas = $_GET['idberkas'];
        $idnilai = $_GET['idnilai'];

        $query = mysqli_query($connect, "SELECT * FROM pendaftar WHERE no_pendf='$no_pendf'");
        $data = mysqli_fetch_array($query);
        $id = $data['id'];
        $nama = $data['nama'];

        $queryblacklist = mysqli_query($connect, "INSERT INTO blacklist VALUE('$id', '$nama')");
        
        $querypendaftar = mysqli_query($connect, "DELETE FROM pendaftar WHERE no_pendf='$no_pendf'");
        $queryberkas = mysqli_query($connect, "DELETE FROM berkas WHERE id_berkas='$idberkas'");
        $querynilai = mysqli_query($connect, "DELETE FROM nilai_un WHERE id_nilai='$idnilai'");
        
        if ($query AND $queryblacklist AND $queryberkas AND $querynilai AND $querypendaftar) {
            echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?monitoring';</script>";
        } else {
            echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?monitoring';</script>";
        }
    }