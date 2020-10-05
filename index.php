<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$matchesVolley = [
  0 => [
    "Squadra casa" => "Leo Shoes Modena",
    "Squadra trasferta" => "Vero Volley Monza",
    "Punti Squadra casa" => 1,
    "Punti Squadra trasferta" => 3,
  ],

  1 => [
    "Squadra casa" => "Sir Safety Conad Perugia",
    "Squadra trasferta" => "Tonno Callipo Calabria Vibo Valentia",
    "Punti Squadra casa" => 3,
    "Punti Squadra trasferta" => 0,
  ],

  2 => [
    "Squadra casa" => "Allianz Milano",
    "Squadra trasferta" => "Top Volley Cisterna",
    "Punti Squadra casa" => 3,
    "Punti Squadra trasferta" => 0,
  ],

  3 => [
    "Squadra casa" => "Consar Ravenna",
    "Squadra trasferta" => "Gas Sales Bluenergy Piacenza",
    "Punti Squadra casa" => 1,
    "Punti Squadra trasferta" => 3,
  ],

  4 => [
    "Squadra casa" => "Kioene Padova",
    "Squadra trasferta" => "Itas Trentino",
    "Punti Squadra casa" => 0,
    "Punti Squadra trasferta" => 3,
  ],

  5 => [
    "Squadra casa" => "NVB Verona",
    "Squadra trasferta" => "Cucine Lube Civitanova",
    "Punti Squadra casa" => 0,
    "Punti Squadra trasferta" => 3,
  ],
];

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

  <h1>LEGA PALLAVOLO SERIE A</h1>
  <h2>Regular Season SuperLega credem Banca</h2>
  <h3>1° Giornata Andata - Domenica 27 Settembre 2020 Ore 18:00</h3>

  <p>
    <?php

    for ($i = 0; $i<count($matchesVolley); $i++) {
      echo $matchesVolley[$i]["Squadra casa"]." - ".$matchesVolley[$i]["Squadra trasferta"]." | ".$matchesVolley[$i]["Punti Squadra casa"]." - ".$matchesVolley[$i]["Punti Squadra trasferta"]."<br>";
    }
    //?>
  </p>

</body>
</html>
