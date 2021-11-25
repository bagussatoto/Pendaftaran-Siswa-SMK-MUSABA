<?php

    $connect = mysqli_connect("localhost", "root", "", "dts_sertifikasi");

    if (mysqli_connect_errno()) {
        echo "ora konek cuk".mysqli_connect_error();
    }