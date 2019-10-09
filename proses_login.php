<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");
    
    if(mysqli_num_rows($query) == 0) {
        header("location: ".BASE_URL."index.php?page=login&notif=true");
    }else{
        $row =mysqli_fetch_assoc($query);

        // membuat session
        // Session adalah sebuah varibel sementara yang diletakkan di server. 
        // Di mana PHP bisa mengambil nilai yang tersimpan di server walaupun kita membuka halaman baru. 
        // Biasanya session akan hilang jika anda menutup browser.
        session_start();

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['level'] = $row['level'];

        if(isset($_SESSION["proses_pesanan"])){
            header("location: ".BASE_URL."index.php?page=data_pemesan.php");
        }else{
            header("location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");
        }
    }