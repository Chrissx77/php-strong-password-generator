<?php
    $password = $_GET['passwordLength'];
    $variabilePass = '';

    for($i = 0; $i < $password; $i++){
        $variabilePass .= chr(rand(33, 125));
    }

    echo $variabilePass;
    ?>