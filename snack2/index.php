<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $at_position = strpos($mail, "@");
  $point_position = strpos($mail, ".");
  $age_boolean = ctype_digit($age);
  var_dump($name);
  var_dump($mail);
  var_dump($age_boolean);

  ?>


  <?php if (strlen($name) < 3 || ($at_position === false || $point_position === false) || $age_boolean == false) { ?>
    <h1>Accesso negato</h1>
  <?php } else { ?>
    <h1>Accesso riuscito</h1>
  <?php } ?>
</body>

</html>