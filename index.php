<?php include "klase_menesis.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kalendorius</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            .savaite
            {
                display:grid;
                grid-template-columns: auto auto auto auto auto auto auto;
                grid-column-gap: 1%;
                grid-row-gap: 1%;
                margin: 1%;
                width: 20%;
            }
            .antraste
            {
                grid-column: 1 / 8;
                text-transform: uppercase;
                font-weight: bold;
                text-align: center;
                font-size: 30px;
                padding: 0;
                margin: 0;
            }
            span
            {
                text-align: center;
                font-size: 20px;
            }
            .button{
                text-align: center;
                font-size: 20px;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <?php
            $sausis = new Menesis(2020, "Sausis", 31 , 3);
            $sausis->isvedimas();
        ?>
    </body>
</html>