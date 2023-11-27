<?php
session_start();
if (!isset($_SESSION['log']) || $_SESSION['log'] != 'admin') {
    header("location:login.php?error=2");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="page2.php">page2</a>
    <a href="page3.php">page3</a>
    <a href="page4.php">page4</a>
    <a href="logout.php">Logout</a>
    <?php
    echo "<h1>Bienvenue sur la page3" . $_SESSION['log'] . "</h1>";
    ?>
    <h3>les Informations confidentielles de cette page 3</h3>
</body>


</html>