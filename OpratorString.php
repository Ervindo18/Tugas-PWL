<?php

$teks1 = "Aku Sedang Belajar";
            $teks2 = "Pemrograman WEB 2";
            $teks3 = "Menggunakan PHP";

            $hasil = $teks1 . $teks2 . $teks3;
            printf("hasil : %s<br/>",$hasil);
            //hasil : Aku Sedang Belajar Pemrograman WEB 2 Menggunakan PHP
            $hasil = $teks1 . " " . $teks2 . " " . $teks3;
            echo "hasil : " . $hasil;
            //hasil : Aku Sedang Belajar Pemrograman WEB 2 Menggunakan PHP

?>