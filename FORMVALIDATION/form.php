
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
    $fullname = $email = $comment = $number = $age = $gender = "";

    if($_SERVER['REQUEST_METHOD'] =='POST' ){
      $fullname = test_input($_POST['name']);
      $email = test_input($_POST['email']);
      $number = test_input($_POST['number']);
      $comment = test_input($_POST['comment']);
      $number = test_input($_POST['number']);
      $age = test_input($_POST['age']);
      $gender = test_input($_POST['gender']);
    }

    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
    }
  ?>

  <h2>form validation</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> " method="post">


  Full Name: <input type="text" name="name"> <br>
  Email: <input type="email" name="email"> <br>
  Age: <input type="text" name="age"> <br>
  Comment: <textarea name="comment" ></textarea> <br>
  Number: <input type="text" name="number"> <br>
  Gender: <input type="radio" name="gender" value="female" > female
  <!-- <br> -->
  <input type="radio" name="gender" id="" value="male" >male <br>

  <input type="submit" value="click here" name="click here">

</form>


<?php
  echo "<h2>Yuour input : </h2>";
  echo $fullname;
  echo "<br/>";
  echo $email;
  echo "<br/>";
  echo $age;
  echo "<br/>";
  echo $comment;
  echo "<br/>";
  echo $gender;
  echo "<br/>";

?>
</body>
</html>