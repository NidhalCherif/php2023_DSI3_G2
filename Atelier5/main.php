<?php
require "Personne.php";
$obj = new Personne('ben foulene', 'foulene', 'Tunis');
$obj->name = 'CHERIF';
$obj->__set('name', 'AAAA');
echo "<pre>";
var_dump($obj);
echo "</pre>";

//echo "<H1> bonjour</h1>";
