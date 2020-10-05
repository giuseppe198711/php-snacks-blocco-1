<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

// sto creando una variabile parola e gli sto assegnando il valore di
// parola all'interno del link
 $nome = $_GET["nome"];
 $mail = $_GET["mail"];
 $age = $_GET["age"];

 $messaggio = "";

 if ((((strlen($nome) > 3) && (strpos($mail, ".") !== false)) && (strpos($mail, "@" ) !== false)) && (is_numeric($age)))  {
   $messaggio = "Accesso riuscito";
 } else {
   $messaggio = "Accesso non riuscito";
 }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo $messaggio; ?>

   </body>
 </html>
