<?php

    function Hitung_kembalian($jml_beli,$jml_bayar)
    {
        $kembalian = $jml_bayar-$jml_beli;
        $limapuluhan = $kembalian/50000;
        $sisa1 = $kembalian%50000;

        $dupuluhan = $sisa1/20000;
        $sisa2 = $sisa1%20000;

        $sepuluhan = $sisa2/10000;
        $sisa3 = $sisa2%10000;

        $limaribuan = $sisa3/5000;
        $sisa4 = $sisa3%5000;

        $duaribuan = $sisa4/2000;
        $sisa5 = $sisa4%2000;

        $seribuan = $sisa5/1000;
        $sisa6 = $sisa5%500;
        $limaratusan = $sisa5/500;
        $sisa7 = $sisa5%500;
        echo (int) $limapuluhan .' x 50000<br>';
        echo (int) $dupuluhan .' x 20000<br>';
        echo (int) $sepuluhan .' x 10000<br>';
        echo (int) $limaribuan .' x 5000<br>';
        echo (int) $duaribuan .' x 2000<br>';
        echo (int) $seribuan .' x 1000<br>';
        echo (int) $limaratusan .' x 500<br>';
        
    
    }

    echo Hitung_kembalian(110500,200000);
    ?>