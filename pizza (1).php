<?php
    $size=$_POST['size'];
    $che=$_POST['che'];
    $top=$_POST['top'];
    echo''.$size.' '.$che.' '.$top.' ';
    $bill=0;
        if($size=='S'){
            $bill += 100;
            
        }elseif($size=='M'){
            $bill += 200;
            
        }
        else{
            $bill +=400;
            

        }

        if($che=="Y"){
            
            $bill += 50;
        }else{
            $bill += 80;
        }
        echo $bill;

?>