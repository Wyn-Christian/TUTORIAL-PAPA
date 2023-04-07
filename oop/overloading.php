<?php

?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Overloading</title>
</head>

<body>
  <?php

  class Example
  {

    public function foo($arg1)
    {
      echo "foo with one argument: " . $arg1;
    }

    public function food($arg1, $arg2)
    {
      echo "foo with one argument: " . $arg1 . " " . $arg2;
    }

    public function __call($name, $arguments)
    {
      echo "Function " . $name . " doesnt exists.";
    }
  }

  $example = new Example();

  $example->foo("hello");
  echo "<br/>";
  $example->food("hello", "World");
  echo "<br/>";
  $example->bar();






  ?>
</body>

</html>