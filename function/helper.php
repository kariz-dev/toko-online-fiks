<?php

    define("BASE_URL", "http://localhost/fiks/");

    // membuat fungsi Rupiah
    function rupiah($nilai=0){
        $string = "Rp ". number_format($nilai);
        return $string;
    }
?>