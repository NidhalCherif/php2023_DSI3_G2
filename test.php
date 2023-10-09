<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
         //type int
    $B = 1.0;   //type float
    $classe = "L2DSI3"; //type string
    $ok = true;  //type bool
    var_dump($ok);
    $A = 1;
    echo ' <br/>' . $B;
    //echo "<script> alert ('bonjour')</script>";
    echo "<H2>Bonjour $classe</H2>";
    echo '<H2>Bonjour $classe</H2>';
    echo '<H2>Bonjour ' . $classe . '</H2>';
    ?>
    <script>
        alert('bonjour <?= $classe ?>');
    </script>;




</body>

</html>