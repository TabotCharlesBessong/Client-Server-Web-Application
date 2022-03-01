
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
?>
</body>
</html>


