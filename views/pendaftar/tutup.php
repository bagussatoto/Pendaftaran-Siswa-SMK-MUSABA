<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="icon" type="image/png" href="../../assets/img/logo.png">
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

    <!-- START CONTENT -->
    <main role="main" style="min-height:400px">
        <div class="container">
        <div class="text-center mt-5 pt-5">
            <h1>MAAF PENDAFTARAN SUDAH DITUTUP</h1>
            <P>Batas waktu pendaftaran sudah habis</P>
            <a href="../auth/login.php">kembali</a>
        </div>
    </div>
    </main>
    <!-- END CONTENT -->


    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>