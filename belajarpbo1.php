class mobil{
    var $warna;
    var $merk;
    var $jenis;
    function nyalakan_mobil(){
        return"mobil menyala";
    }
        function matikan_mobil(){
            return "mesin mobil mati";
        }
    };

    $honda_civic = new mobil();
    
    $honda_civic->warna="<?php
merah";
    $honda_civic->merk="honda";
    $honda_civic->jenis="sedan";

    echo $honda_civic->warna;
    echo "<br />";
    echo $honda_civic->merk;
    echo "<br />";
    echo $honda_civic->jenis;
    echo "<br />";

    echo $honda_civic->nyalakan_mobil();
    echo "<br />";
    echo $honda_civic->matikan_mobil();