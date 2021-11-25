<?php

    session_start();

    include "connect.php";

    if (isset($_POST['login'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        
        $cekemail = mysqli_query($connect, "SELECT * FROM user WHERE email='$email'");
        $cekemail = mysqli_fetch_array($cekemail);

        if ($cekemail > 0) {
            
            if ($cekemail['email'] == $email AND $cekemail['password'] == $password) {
                $_SESSION['id'] = $cekemail['id'];
                $_SESSION['nama'] = $cekemail['nama'];
                $_SESSION['login'] = 'true';
                
                if ($cekemail['id_level'] == 1) {
                    echo "<script>alert('Berhasil login!'); document.location.href = '../views/admin';</script>";
                } else {
                    echo "<script>alert('Berhasil login!'); document.location.href = '../views/pendaftar';</script>";
                }
            } else {
                echo "<script>alert('Password yang dimasukkan salah!'); document.location.href = '../views/auth/login.php';</script>";
            }
   
        } else {
            // echo "<script>alert('email tidak ditemukan!'); document.location.href = '../views/auth/login.php';</script>";
        }

    } elseif(isset($_POST['register'])) {

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $query = mysqli_query($connect, "INSERT INTO user VALUES('0', '$nama','$email','$password','2')");

        if ($query) {
                echo "<script>alert('Berhasil mendaftar!'); document.location.href = '../views/auth/login.php';</script>";
            } else {
                echo "<script>alert('Gagal mendaftar!'); document.location.href = '../views/auth/register.php';</script>";
            }

    } else {
            session_destroy();

            header('location:../views/auth/login.php');
    }