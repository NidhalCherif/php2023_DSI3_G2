<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Nom: <input type="text" name="nom" id=""></br>
        Age: <input type="text" name="age" id=""></br>
        <h4>Question1: le php s'execute coté: </h4>
        seveur<input type="checkbox" name="Q1[]" value='Serveur' id="">
        Client<input type="checkbox" name="Q1[]" value='Client' id="">
        Les deux<input type="checkbox" name="Q1[]" value='Les deux' id=""></BR>
        <h4>Question2: le XSS est : </h4>
        Une faille<input type="checkbox" name="Q2[]" value="faille" id="">
        Un virus<input type="checkbox" name="Q2[]" value="virus" id="">

        <input type="submit" value="Envoyer" name="ok">
    </form>

    <?php
    if (isset($_POST['ok'])) {
        echo "Votre nom :" . htmlspecialchars($_POST['nom']);
        echo "</br>Votre age :" . htmlspecialchars($_POST['age']);
        $question1 = $_POST['Q1'];
        $question2 = $_POST['Q2'];
        echo "<br> les réponses  de la question 1: <br>";
        foreach ($question1 as  $value) {
            # code...
            echo $value . "</br>";
        }
        echo "<br> les réponses  de la question 2: <br>";
        foreach ($question2 as  $value) {
            # code...
            echo $value . "</br>";
        }
    }
    ?>


</body>

</html>