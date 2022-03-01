
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

       function __construct($name,$color){
         $this->color = $color;
         $this->name = $name ;
       }

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

    $berry = new Fruit('StreaBerry','Red');
    echo $berry->getName();
    echo "<br>";
    echo $berry->getColor();
  ?>
</body>
</html>