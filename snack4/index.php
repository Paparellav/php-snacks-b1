<!-- ## Snack 4 (Bonus)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

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
  $integersArray = [];
  while (count($integersArray) < 15) {
    $newInt = rand(1, 100);
    if (!in_array($newInt, $integersArray)) {
      array_push($integersArray, $newInt);
    }
  }
  var_dump($integersArray);
  ?>

  <h1>Array di numeri:</h1>
  <ul>
    <?php for ($i = 0; $i < count($integersArray); $i++) { ?>
      <li>
        <?php echo $integersArray[$i] ?>
      </li>
    <?php } ?>
  </ul>
</body>

</html>