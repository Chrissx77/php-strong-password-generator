<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <form>
        <input type="number" name="passwordLength">
        <input type="submit" value="CHECK">
    </form>

    <?php
    $password = $_GET['passwordLength'];
    $variabilePass = '';

    for($i = 0; $i < $password; $i++){
        $variabilePass .= chr(rand(33, 125));
    }

    echo $variabilePass;
    ?>

</body>

</html>