<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

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
  $posts = [

    '10/01/2019' => [
      [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
      ],
      [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
      ],
      [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
      ],
      [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
      ]
    ],
  ];
  var_dump($posts);
  ?>

  <ul>
    <?php for ($i = 0; $i < count($posts); $i++) {
      $date = array_keys($posts)[$i] ?>

      <li>
        <p>
          Post pubblicati il: <?php echo $date; ?>
        </p>
        <ul>
          <?php for ($a = 0; $a < count($posts[$date][$a]); $a++) {
            $title = ($posts[$date][$a]["title"]);
            $author = ($posts[$date][$a]["author"]);
            $text = ($posts[$date][$a]["text"]); ?>
            <li>
              <p>
                <?php echo $title; ?>
              </p>
              <p>
                <?php echo $author; ?>
              </p>
              <p>
                <?php echo $text; ?>
              </p>
            </li>
          <?php } ?>
        </ul>
      </li>
    <?php } ?>
  </ul>
</body>

</html>