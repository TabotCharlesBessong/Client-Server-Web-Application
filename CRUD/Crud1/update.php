
<?php
  include "config.php";
  
  if(isset($_POST['update'])){
    $firstName = $_POST['firstname'];
    $userId = $_POST['id'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE 'users' SET firstname = '$firstName', lastname = '$lastName', gender = '$gender',email = '$email', password = '$password', id= '$userId';";

    $result = $conn->query($sql);

    if($result == TRUE){
      echo "Record updated successfully";
    }else{
      echo "Error:". $sql . "<br/>". $conn->error;
    }
    
  }

  if(isset($_GET['id'])){
    $userId = $_GET['id'];
    $sql = "SELECT *FROM users WHERE 'id  = '$userId' ";
    $result = $conn->query(($sql));

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $firstName = $row['firstname'];
        $lastName = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $id = $row['id'];
      }
    ?>

      <h2>Usrr Update</h2>
    
      <form action="" method="POST">
        <fieldset>
          <legend>Personal information</legend>
          First Name: <br>
          <input type="text" value="<?php echo $firstName;?>" name="firstname"><br>
          Last Name: <br>
          <input type="text" value="<?php echo $lastName;?>" name="lastname"><br>
          Password: <br>
          <input type="password"  value="<?php echo $password;?>" name="password"><br>
          <input type="email"  value="<?php echo $email;?>" name="email"><br>
          Gender: <br>
          <input type="radio" name="gender" value="male" <?php if($gender == 'male'){echo 'checked';} ?>  >Male
          <input type="radio" name="gender" value="female" <?php if($gender == 'female'){echo 'checked';} ?>      >Female <br>
          <input type="submit" value="submit">
        </fieldset>
      </form>

      <?php 
        }
      }
      ?>

      