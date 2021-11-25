<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran siswa baru</title>
    <link rel="icon" type="image/png" href="../../assets/img/logomusaba.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -70%);
        }
        .btn-primary {
            box-shadow: 0 18px 40px -12px #007bff;
        }
    </style>
</head>

<body>

    <div class="col-3 center">
        <h4 class="text-center mb-3">REGISTRASI</h4>
        <form action="../../controller/auth.php" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="masukkan nama" name="nama"
                    aria-label="nama" aria-describedby="basic-addon1" required="true">
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="masukkan email" name="email"
                    aria-label="email" aria-describedby="basic-addon1" required="true">
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="masukkan password" name="password"
                    aria-label="Username" aria-describedby="basic-addon1" required="true">
            </div>
            <div class="bg-light text-center">
                <button type="submit" name="register" class="btn btn-primary btn-block mb-3">REGISTRASI</button>
                <a href="login.php" class="text-secondary">login</a>
            </div>
        </form>
    </div>

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>