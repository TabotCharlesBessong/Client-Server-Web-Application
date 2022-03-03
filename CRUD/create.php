
<?php
  include 'config.php';
  if(isset($_POST['submit'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
  }

  $sql = "INSERT INTO 'users' ('firstname','lastname','email','password','gender')  VALUES ('$firstName','$lastName','$email','$password','$gender')";

  $result = $conn->query($sql);
  if($result == TRUE){
    echo 'New record succesfully created ';
  }else{
    echo "Error" .$sql . "<br/>". $conn->error ;
  }

  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Lorem ipsum dolor sit.</h1>
</body>
</html>