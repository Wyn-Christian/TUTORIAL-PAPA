<?php
include "some_function.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wymmm</title>
</head>

<body>
  <h1>

    hello world
  </h1>
  <h1>
    <?php echo "hello world" ?>
  </h1>

  <h1 style="color:red">
    <?php someFunction("hellllooo") ?>
    <?php someFunction(100) ?>
    <?php someFunction("hellllooo") ?>
  </h1>
  <h2>
    <?php someFunction(true) ?>
  </h2>
</body>

</html>