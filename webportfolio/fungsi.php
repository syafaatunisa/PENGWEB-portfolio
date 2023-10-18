<?php
function potongArtikel($artikel, $wordlimit, $idartikel){
    // pisahkan setiap kata lalu masukkan ke dalam arrray
    $kata = explode(" ",$artikel);

    // gabungkan kembali kata2 berdasarkan wordlimit
    $hasil = implode(" ",array_slice($kata,0,$wordlimit));

    if(count($kata) > $wordlimit){
        $hasil .= '<br><a href="artikel.php?id='.$idartikel.'">Read More</a>';
    }

    return $hasil;
}

function hanyaAngka($input){
    $filterinput = preg_replace("/[^0-9]","",$input);

    return $filterinput;
}

function cekId($input){
    if (ctype_digit($input)){
        return true;
    }else{
        return false;
    }
}
?>