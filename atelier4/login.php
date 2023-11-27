<?php
session_start();
if (isset($_GET['error'])) {
    $etat = $_GET['error'];
    switch ($etat) {
        case '1':
            echo "<script>
               alert('Login et/ou Mot de passe sont incorrects');
                 </script>";
            break;
        case '2':
            echo "<script>
                    alert('Vous n\'êtes pas authorisés!!!');
                      </script>";
            break;
        case '3':
            echo "<script>
                    alert('Merci pour votre visite ');
                      </script>";
            break;
    }
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
    <form action="" method="post">
        Votre login<input type="text" name="log" id="">
        Votre Mot de passe<input type="text" name="pw" id="">
        <input type="submit" name="ok" value="Se connecter">
    </form>
    <?php
    if (isset($_POST['ok'])) {
        $log = htmlspecialchars($_POST['log']);
        $mp = htmlspecialchars($_POST['pw']);
        if ($log == "admin" && md5($mp) == "0192023a7bbd73250516f069df18b500") {
            $_SESSION['log'] = $log;
            $_SESSION['pw'] = $mp;
            header("location:page2.php");
            exit;
        }
        header("location:login.php?error=1");
    }
    ?>
</body>

</html>