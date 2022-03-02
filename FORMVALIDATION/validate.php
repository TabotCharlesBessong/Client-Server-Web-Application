
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error{
      color: #ff3451;
    }
  </style>
</head>
<body>


  <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email  = $gender = $website = $comment =  "";
    if($_SERVER['REQUEST_METHOD'] =='POST' ){
      if(empty($_POST['name'])){
        $nameErr = "Please enter a valid name";
      }else {
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z'-]'$/",$name)){
         $nameErr = "Only letters and white space allowed "; 
        }
      }
    }
    if(empty($_POST['email'])){
      $emailErr = "Invalid email address";
    }else{
      $email = test_input($_POST['email']);
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr = "The email address is incorrect";
      }
    }

    if(empty($_POST['website'])){
      $website = "";
    }else{
      $website = test_input($_POST['website']);
      // if(!preg_match("/\b(?:(?https?"))
    }
    if(empty($_POST['comment'])){
      $comment = "";
    }else{
      $comment = test_input($_POST['comment']);
    }

    if(empty($_POST['gender'])){
      $genderErr = "select a gender";
    }else{
      $comment = test_input($_POST['gender']);
    }

    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
    }
  ?>

  <h2>Php form validation</h2>
  <p><span class="error">'required field</span></p>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> " method="post">


  Full Name: <input type="text" name="name"> <br>
  <span class="error">' <?php echo$nameErr;?> </span>
  Email: <input type="email" name="email"> <br>
  <span class="error">' <?php echo$emailErr;?> </span>
  Website: <input type="text" name="website"> <br>
  <span class="error">' <?php echo$websiteErr;?> </span>
  Comment: <textarea name="comment" ></textarea> <br>
  <!-- <span class="error">' <?php echo$commentErr;?> </span> -->
  <!-- Number: <input type="text" name="number"> <br> -->
  Gender: <input type="radio" name="gender" value="female" > female
  <!-- <br> -->
  <input type="radio" name="gender" id="" value="male" >male <br>
  <span class="error">' <?php echo$genderErr;?> </span>

  <input type="submit" value="click here" name="click here">

  <?php
  echo "<h2>Yuour input : </h2>";
  echo $name;
  echo "<br/>";
  echo $email;
  echo "<br/>";
  echo $website;
  echo "<br/>";
  echo $comment;
  echo "<br/>";
  echo $gender;
  echo "<br/>";

?>

</form>
</body>
</html>

