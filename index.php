<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$matchesVolley = [
  "match1" => [
    "Squadra casa" => "Volley Lube Macerata",
    "Squadra trasferta" => "itas Diatec Trentino",
    "Punti Squadra casa" => 1,
    "Punti Squadra trasferta" => 3,
  ]

  "match3" => [
    "Squadra casa" => "Volley Lube Macerata",
    "Squadra trasferta" => "itas Diatec Trentino",
    "Punti Squadra casa" => 1,
    "Punti Squadra trasferta" => 3,
  ]

  "match3" => [
    "Squadra casa" => "Volley Lube Macerata",
    "Squadra trasferta" => "itas Diatec Trentino",
    "Punti Squadra casa" => 1,
    "Punti Squadra trasferta" => 3,
  ]


];

var_dump($matchesVolley);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>




</body>
</html>
