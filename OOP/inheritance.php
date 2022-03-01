
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
    class Fruit {
      public $name;
      public $color;
  
      public function __construct($name,$color){
        $this->color = $color;
        $this->name = $name ;
      }

      public function intro(){
        echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}  ";
      }
    }

    class Cherry extends Fruit {
      public function message(){
        echo "Is Cherry a fruit or a berry  ?";
      }
      
    }
    $cherry = new Cherry('Cherry','red');
    $cherry->message();
    echo "<br>";
    $cherry->intro() ;
  ?>
</body>
</html>