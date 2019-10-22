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
    $Tal1 = 40;
    $Tal2 = 12;

    if ($Tal1 != $Tal2) {
        echo 'Tal1 er anderledes end Tal2';
        echo '<br>';
        if ($Tal1 > $Tal2) {
            echo 'Tal1 er større end Tal2';
        } else {
            echo 'Tal2 er større end Tal1';
        }
    } else {
        echo 'Tal1 er lig med Tal2';
    }
    ?>
</div>
</body>
</html>