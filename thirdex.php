<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div>
<?php
        $karakter = 75;
        //Hvis 
        if ($karakter>79){
            echo "12";
        }
        
        elseif($karakter<=79&&  $karakter>60) { 
            echo "10";
        }
        elseif($karakter<=60&& $karakter>50) { 
            echo "7";
        }
        elseif($karakter<=50&&  $karakter>40) { 
            echo "4";
        }
        elseif($karakter<=40&&  $karakter>30) { 
            echo "02";
        }
        
        else{
            echo "Dumpet";
        }
    ?>
</div>
</body>
</html>