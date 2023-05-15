<?php

$text_area = $_GET['text_area'];
$parola = $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>Pagina atterraggio form</title>
</head>
<body>
  <div class="container my-5">
    <h2>Questo è il testo inserito:</h2>
    <p><?php echo $text_area ?></p>
    <h4>Il testo che hai inserito è lungo <?php echo strlen($text_area)?> parole</h4>

    <h3>La parola che vuoi censurare è:</h3>
    <span><?php echo $parola ?></span>
  </div>

  
</body>
</html>