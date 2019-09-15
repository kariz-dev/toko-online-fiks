<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "fiks";

    // untuk melakukan koneksi ke database mysqli
    $koneksi = mysqli_connect($server, $username, $password, $database) or die("koneksi ke database gagal!");
