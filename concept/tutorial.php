
<?php
  echo "Hello men";
  $num = 34;
  $num2 = 26;
  $val = $num + $num2;
  echo "<h1>" . $val . "<h1>";

  $laptop_brand = array("HP","Dell","Lenovo","Accer","Apple");
  echo var_dump($laptop_brand[2]);

  // This are constant in php
  define("laptops","HP Lenovo Accer");
  define("laptop",["HP" ,"Lenovo", "Accer"]);
  echo laptops;
  // <br>
  echo laptop[1];
 

  // if statement
  $var = 6;
  if($var > 7){
    echo $var;
  }else{
    echo "The condition did not meet";
  }

  // switch statemnt
  $level = 7;
  switch($level){
    case 1:
      echo "You are playing the EASY  level";
      break;
    case 2:
      echo "You are playing the MODERATE  level";
      break;
    case 3:
      echo "You are playing the HARD  level";
      break;
    case 4:
      echo "You are playing the EXTREME  level";
      break;
    default:
      echo "This value is invalid";
    
  }

  $vam = 1;
  while ($vam <=10){
    echo "Number: $vam <br>";
    $vam++;
  }
  
  // $van = 11;
  // do{
    // echo "Number: $van <br>";
    // $van++;
  // }while($van <=10)

  $age = 21;

  if ($age<=13) {
  
      echo "Child.";
  
  } elseif ($age>13 && $age<19) {
  
      echo "Teenager";
  
  } else {
  
      echo "Adult";
  
  }
  $i = 1;
  
  while ($i < 7) {
  
      echo "The value is $i <br />";
  
      $i++;
    
    }
  $i = 5;
  
  do {
  
      echo "The number is " . $i . "<br/>";
  
      $i++;
  
  } while($i <= 7);
  $names = array("John", "David", "Amy");
  
  foreach ($names as $name) {
  
      echo $name.'<br />';
  
  }
  $today = 'Tue';
  
  switch ($today) {
  
      case "Mon":
  
          echo "Today is Monday.";
  
          break;
  
      case "Tue":
  
          echo "Today is Tuesday.";
  
          break;
  
      case "Wed":
  
          echo "Today is Wednesday.";
  
          break;
  
      case "Thu":
  
          echo "Today is Thursday.";
  
          break;
  
      case "Fri":
  
           echo "Today is Friday.";
  
           break;
  
      case "Sat":
  
           echo "Today is Saturday.";
  
           break;
  
      case "Sun":
  
           echo "Today is Sunday.";
  
           break;
  
      default:
  
           echo "Invalid day.";
  
  }

  function name(){
    for($vap = 1;$vap <= 20 ; $vap++){
      echo "Number: $vap <br> ";
    }
  }



  name();
  echo "I just ran the program";

?>