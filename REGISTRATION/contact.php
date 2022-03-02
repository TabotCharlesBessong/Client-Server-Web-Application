
<?php
  
  if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost','root','','test1') or die('connection failed:' .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $bgroup = $_POST['bgroup'];

      $sql = "INSERT INTO 'users' ('name','email','phone','bgroup') VALUES ('$name','$email','$phone','$bgroup')";
      $query = mysqli_query($conn,$sql);
      if($query){
        echo 'Entery successfull ';
      }else{
        echo 'An error occured 401';
      }
    }
  }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body bgcolor="#1ab785" style="text-align: center;" >
  <div class="">
    <h2>Registration form </h2>
  </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="display: flex; flex-direction:column; justify-content:space-around;align-items:center" >
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required > <br>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" required > <br>

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" required > <br>

    
    

    <label for="bgroup">Blood Group</label>
    <input type="text" name="bgroup" id="bgroup" required > <br>

    <input type="submit" value="submit" name="submit" id="submit" >
  </form>
</body>
</html> -->
