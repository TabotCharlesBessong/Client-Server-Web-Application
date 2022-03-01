


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
  
  <?php
  class Fruit {
    public $name;
    public $color;

    function setName($name){
      $this->name = $name;
    }

    function getName(){
      return $this->name;
    }

    function setColor($color){
      $this->color = $color;
    }

    function getColor(){
      return $this->color;
    }

  }

  $apple = new Fruit();
  $banana = new Fruit();
  $apple->setName('Apple');
  $banana->setName('Banana');

  echo $apple->getName();
  echo "<br>";
  echo $banana->getName();

  ?>

</body>
</html>