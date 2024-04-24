<?php
    $bilangan = 100;
    $pembagi = 3;

    $hasilBagi = floor($bilangan / $pembagi);
    $sisaBagi = $bilangan % $pembagi;

    echo $bilangan." dibagi dengan ".$pembagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
?>