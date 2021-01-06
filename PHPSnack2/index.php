<!-- PHP Snack 2:
Passare come parametri GET name, mail e age everificare
 (cercando i metodi che non conosciamo nella documentazione)
che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti 
“Accesso negato” -->

<h1>PHP JSNACK 2</h1>

<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if( 
    strlen($name) < 3 ||
    !is_numeric(stripos($email, ".")) ||
    !is_numeric(stripos($email, "@")) || 
    !is_numeric($age) 
   ){
    echo '<h1> Accesso negato. </h1>';
} else{
    echo '<h1> Accesso riuscito. </h1>';
};


?>