<?php

function buyEgg($tgl_beli,$jml_uang){
    $tgl_prima = 0;
    $jml_beli = $jml_uang/2500;
    //$tgl_kelipatan ;
    for($i=1;$i<=$tgl_beli;$i++){
        if(($tgl_beli%$i)==0){
            $tgl_prima = $tgl_prima+1;
        }
    } 

    if($tgl_prima==2){
        $lusin = $jml_beli/12;
        $bonus = $jml_beli+($lusin*2);
        
    }else if(($tgl_beli%2==1) && ($tgl_beli != ($tgl_prima==2))){
        $lusin = $jml_beli/12;
        $bonus = $jml_beli+($lusin*3);
    }
    return $bonus;
}

echo buyEgg(15,90000);
?>