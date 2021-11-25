<?php

    session_start();
    include "../../controller/connect.php";
    if ($_SESSION['login'] != 'true') {
        header('location:views/login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="icon" type="image/png" href="../../assets/img/logomusaba.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <style>
        .jumbotron {
            background-image: url("../../assets/img/bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: -280px;
            background-attachment: fixed;
        }

        /* nav {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: "";
            display: block;
            height: 420px;
            width: 100%;
            background: linear-gradient(to top, black, rgba(0, 0, 0, 0));
            position: absolute;
            top: 0;
            left: 0;
        } */

        @media (max-width:768px) {
            .jumbotron {
                background-position-y: -245px;
            }

            .container .row div {
                text-align: center !important;
                margin-bottom: 20px;
            }
        }

        .btn-primary {
            box-shadow: 0 18px 40px -12px #007bff;
        }

        .btn-warning {
            box-shadow: 0 18px 40px -12px #ffc107;
        }

        .btn-secondary {
            box-shadow: 0 18px 40px -12px #6c757d;
        }

        .btn-danger {
            box-shadow: 0 18px 40px -12px #dc3545;
        }
    </style>
</head>

<body>

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 shadow" style="width:100%">
        <div class="container">
            <a class="navbar-brand" href="http://smkmuh1bantul.sch.id/">
                <img src="../../assets/img/logomusaba.png" width="30" height="30" alt="logosmk">
                <span class="align-middle">SMK MUHAMMADIYAH 1 BANTUL</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?monitoring">monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pengaturan">pengaturan</a>
                    </li>
                </ul>
            </div>
            <hr class="mx-2 m-0" style="height:20px; border: 1px solid rgba(0, 0, 0, 0.2)">
            <div class="dropdown">
                <a class="btn btn-white dropdown-toggle" href="" role="button" data-toggle="dropdown"><?= $_SESSION['nama'] ?></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="../../controller/auth.php"><i class="fa fa-sign-out-alt mr-2"></i>Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT -->
    <main role="main" style="min-height:400px">
        <?php

        if(isset($_GET['beranda'])) {
            include "beranda.php";
        } elseif(isset($_GET['monitoring'])) {
            include "monitoring.php";
        } elseif(isset($_GET['pengaturan'])) {
            include "pengaturan.php";
        }
        else {
            include "beranda.php";
        }

        ?>
    </main>
    <!-- END CONTENT -->

    <!-- START FOOTER -->
    <footer class="bg-dark">
        <div class="container text-light">
            <div class="row p-4">
                <div class="col text-center">
                    <h4>CONTACT</h4>
                    <div>
                        <p class="m-2"><i class="fa fa-envelope mr-2"></i>smkmuh1bantul@yahoo.com</p>
                        <p class="m-2"><i class="fa fa-phone mr-2"></i>(0274) 367954</p>
                        <p class="m-2"><i class="fa fa-fax mr-2"></i>085713333002</p>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/smkmusaba/" class="text-light mx-1"><i
                                class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.facebook.com/smkmusaba" class="text-light mx-1"><i class="fab fa-facebook fa-2x"></i></a>
                    </div>
                </div>
                <div class="col text-center">
                    <h4>ADDRESS</h4>
                    <p>Jl.Parangtritis<br> Manding Kidul No.Km. 12,<br> Trirenggo, Kec. Bantul,<br>Daerah Istimewa Yogyakarta 55714</p>
                </div>
                <div class="col text-center">
                    <h4>NAVIGATE</h4>
                    <ul class="list-unstyled">
                        <li><a href="?beranda" class="text-light">Beranda</a></li>
                        <li><a href="?monitoring" class="text-light">monitoring</a></li>
                        <li><a href="?pengaturan" class="text-light">pengaturan</a></li>
                    </ul>
                </div>
            </div>
            <div class="col text-center">
                           <a href="#" &copy; 2020 SMK MUHAMMADIYAH 1 BANTUL</a>
                            <script>
                              document.write(new Date().getFullYear())
                            </script>, <a href="#">Hak Cipta Dari SMK MUHAMMADIYAH 1 BANTUL</a>
                        </div>
                    </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>