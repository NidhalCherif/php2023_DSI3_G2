<?php
session_start();
//unset($_SESSION['nom']);
session_destroy();
header("location:login.php?error=3");
