<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  $playoff = [
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 108,
      "scoreVisiting" => 120
    ],
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 107,
      "scoreVisiting" => 88
    ],
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 95,
      "scoreVisiting" => 97
    ],
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 110,
      "scoreVisiting" => 115
    ],
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 100,
      "scoreVisiting" => 85
    ],
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 90,
      "scoreVisiting" => 92
    ],
    [
      "homeTeam" => "Golden State Warriors",
      "visitingTeam" => "Boston Celtics",
      "scoreHome" => 120,
      "scoreVisiting" => 121
    ],
  ];
  ?>
  <ul>
    <?php for ($i = 0; $i < count($playoff); $i++) { ?>
      <li>
        <span>
          <?php echo $playoff[$i]["homeTeam"]; ?> - <?php echo $playoff[$i]["visitingTeam"]; ?>
        </span>
        <span>
          <?php echo $playoff[$i]["scoreHome"]; ?> - <?php echo $playoff[$i]["scoreVisiting"]; ?>
        </span>
      </li>
    <?php } ?>
  </ul>

  <h1>Winners of Playoff: <?php echo $playoff[0]["visitingTeam"]; ?></h1>
</body>

</html>