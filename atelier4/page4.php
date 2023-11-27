<?php
session_start();
//echo session_id();
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
    echo "<h1>Bienvenue sur la page4" . $_SESSION['log'] . "</h1>";
    ?>
    <h3>les Informations confidentielles de cette page 4</h3>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aspernatur, accusantium ab distinctio quod iste illum, voluptatibus excepturi beatae nobis, illo quibusdam optio soluta alias officiis delectus. Consectetur, doloremque blanditiis.
    Quod sint quos placeat tempora? Eum numquam beatae consequuntur sit obcaecati atque quam ut, aperiam adipisci et explicabo quos libero voluptates. Asperiores nobis est perferendis iure nemo accusantium ratione repellendus.
    Id dolorem recusandae corrupti perferendis facere sunt officia voluptas est dignissimos! Optio hic accusantium temporibus? Et possimus, aperiam ullam, quod quia perspiciatis eos assumenda veritatis sapiente optio dignissimos, delectus dolorum.
    Asperiores voluptates nesciunt cupiditate quia, voluptate pariatur sit saepe vitae ea, quis accusantium commodi, qui velit facilis officia dolor omnis quaerat iure beatae assumenda dicta. At necessitatibus repudiandae dolor minus.
    Libero maiores et sed dolores officiis culpa! Cupiditate laboriosam fuga odio, molestias provident quidem? Enim nulla iusto magni atque repellendus incidunt hic, nobis, qui rem ab, autem voluptatem eaque illo?
    Iusto rem facilis pariatur culpa aliquam consequatur reprehenderit quod quis quasi! Itaque, facilis? Voluptas consequatur nobis, dolore inventore placeat magnam aperiam, praesentium quos harum nulla magni? Ab aliquam omnis accusantium?
    Ipsa, voluptatum quo distinctio harum sunt inventore earum reprehenderit maxime animi consequuntur aspernatur soluta itaque similique cum debitis expedita dolor? Ipsam deleniti quos quod expedita dolorem sit rem itaque deserunt.
    Dignissimos, voluptates sint similique tenetur ipsa reprehenderit quisquam doloribus at est? Ipsum minus fuga itaque sint reprehenderit! Alias maiores laborum ad modi, deleniti dolore pariatur harum dolores facilis nam fugit.
    Expedita laborum reiciendis molestiae optio, obcaecati voluptatum, atque inventore officiis perferendis illum nihil quae dolor. Fugiat voluptates sed nisi nihil vitae perferendis molestias cupiditate laudantium debitis eligendi libero, alias minus.
    Nisi soluta fugit possimus cupiditate similique quisquam ratione et, in vel sint deleniti laborum, cumque corporis incidunt dolore blanditiis consequatur suscipit quis quaerat harum perspiciatis quo recusandae dolorem reprehenderit? Quod.
    Iusto culpa illum perferendis recusandae laudantium quisquam distinctio amet ab eligendi sunt, assumenda esse fuga ut earum optio officiis rem, id eum harum, vitae cum! Quaerat at nobis rem ducimus?
    Incidunt placeat aliquid distinctio, eaque molestiae recusandae dolore illum autem delectus numquam nam, debitis, ipsum quia maiores blanditiis nisi consectetur necessitatibus. Explicabo ratione est sit itaque iure repellendus. Dicta, id?
    Asperiores tenetur saepe esse tempore inventore, enim quos tempora sequi illo? Fuga libero aut aspernatur reiciendis sunt est? Officiis quos quam mollitia aut velit repudiandae alias ipsam voluptatem magni quisquam.
    Iusto sunt tempore totam cum deleniti amet voluptates reiciendis in, quibusdam dolorum qui ipsam aliquid eum dolorem sint quod repudiandae laudantium autem vero quis tenetur doloremque minus soluta quisquam! Fuga?
    Perspiciatis sint quaerat accusantium quia vel quae beatae, delectus sapiente neque expedita dolorem unde consequuntur pariatur voluptatibus, laboriosam officiis voluptates! Voluptate animi consequuntur quaerat excepturi facere eligendi unde, asperiores id.
</body>

</html>