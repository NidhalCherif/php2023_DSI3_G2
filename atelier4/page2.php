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
    echo "<h1>Bienvenue sur la page 2" . $_SESSION['log'] . "</h1>";

    ?>
    <h3>les Informations confidentielles de cette page 2</h3>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi blanditiis odit, aliquam perspiciatis quibusdam quos dolorum facere temporibus laboriosam expedita ad aperiam, explicabo qui magnam. Rerum aut voluptatibus doloremque atque?
    Cupiditate voluptas consequuntur facilis fugiat commodi hic. Laborum suscipit aliquid exercitationem, excepturi, animi asperiores dignissimos, optio architecto ipsa temporibus quam consequatur ducimus debitis voluptates voluptatum aspernatur sequi officiis dicta. Harum.
    Blanditiis voluptates deserunt adipisci atque temporibus? Natus laudantium, voluptas vitae quo, distinctio et eos dolorem esse enim cumque similique incidunt! Vitae deserunt animi distinctio? Corporis ipsa repellat atque velit deleniti?
    Nihil reiciendis at, dignissimos ea nesciunt, doloremque sed, consectetur eos suscipit qui eaque necessitatibus consequuntur deserunt! Voluptate quas aspernatur tempora, optio ipsum ratione natus rem, totam quasi, blanditiis itaque necessitatibus?
    Quibusdam neque ipsum provident! Ratione asperiores maxime dicta. Incidunt iste minima illum consequatur ut nostrum ipsum quam, voluptatibus nobis rerum ipsam laboriosam perspiciatis porro ad recusandae inventore totam ipsa odit?
    Ullam officiis blanditiis ad eos delectus fugiat dolore, voluptas deserunt excepturi optio nemo ea voluptates vero aut rem dolor molestias harum sapiente beatae aperiam, reprehenderit quam. Sed aliquam beatae sequi.
    Saepe iusto temporibus nam omnis quibusdam fugiat ea corrupti architecto? Neque necessitatibus dolores libero, nesciunt aut est magni vero at sit ducimus voluptates assumenda excepturi officia ab totam officiis minus.
    Facilis iusto dolores, atque accusantium perferendis inventore eos quisquam eius! Laudantium doloribus vitae provident assumenda ducimus iusto, distinctio blanditiis sint eos non dolore, sunt voluptates ullam tempora fugit at quae!
    Libero iusto, magnam enim nobis molestiae ut odio numquam, delectus sed cupiditate dolor quaerat ab quia praesentium, unde ea quisquam. Quam reiciendis sequi ratione blanditiis excepturi, nam quos eligendi nihil.
    Sed esse rerum quisquam veniam animi eaque quas sunt quo cum inventore officiis enim rem in molestiae, commodi a fugit obcaecati ullam, odit dignissimos ipsa facilis. Voluptatibus deleniti numquam suscipit?
    Consectetur error asperiores vitae, culpa sapiente id ullam deserunt animi architecto neque. Blanditiis quod mollitia eligendi deleniti qui tenetur doloribus voluptatum accusamus, facilis porro provident itaque aliquam id! Explicabo, quaerat.
    Autem impedit neque ipsam quasi, pariatur aspernatur unde rerum. Impedit, enim corrupti minima reprehenderit, veritatis quod distinctio amet illo quaerat ad, laborum a dignissimos. Voluptatibus corrupti autem nostrum distinctio nemo!
    Sint autem eos accusantium earum deleniti facere, non nostrum quos aliquam, ad ab, totam veritatis molestiae recusandae ut ea ducimus rem quod eveniet aliquid reiciendis doloribus delectus sit officiis? Veritatis.
    Eligendi amet nulla at velit quasi explicabo atque rerum expedita molestiae ipsum reprehenderit aut magnam optio qui architecto maiores, ad nemo eius eos minima repudiandae! Quae aliquid quisquam aperiam quas!
    Hic commodi dolor dolores voluptatibus nisi aut nobis ipsam accusantium sit aliquid ratione recusandae tenetur ullam, error facilis officiis alias magni cumque, totam numquam quasi dicta natus! Quisquam, ut quas?
</body>

</html>