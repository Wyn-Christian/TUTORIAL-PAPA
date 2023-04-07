<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>OOP CLASS. OBJECTS. VARIABLE. METHODS</title>
</head>

<body>
  <?php


  //we have a class of a person
  class person
  {
    //member variable
    public $name;
    public $age;
    public $sex;
    public $hobby;


    //member function


    public function set_bio($name_out, $age_out, $sex_out, $hobby_out)
    {

      $this->name = $name_out;
      $this->age = $age_out;
      $this->sex = $sex_out;
      $this->hobby = $hobby_out;
    }

    public function get_bio()
    {
      echo "My Name is " . $this->name . " Im " . $this->age . " Years Old "
        . " Im a " . $this->sex . " And my Hooby Is " . $this->hobby;
    }
  }

  //we create an object
  $andrei = new person();
  $simon = new person();
  $rj = new person();

  $andrei->set_bio("Andrei James Alejandro", 20, "Male", "BasketBall");
  $simon->set_bio("Simon Genesis Falcon", 19, "Male", "Badminton");
  $rj->set_bio("Ronald Joy Tengco", 16, "Male", "Volleyball");

  $andrei->get_bio();
  echo "<br/>";
  $simon->get_bio();
  echo "<br/>";
  $rj->get_bio();


  ?>
</body>

</html>