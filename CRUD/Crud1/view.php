
<?php
  include 'config.php';

  $sql = 'SELECT *FROM users';
  $result = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap-grid.css">
  <title>Title view page</title>
</head>
<body>
  <div class="conatainer">
    <h2>users</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Gender</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
          
        ?>
        <tr>
          <td> <?php echo $row['id']; ?> </td>
          <td><?php echo $row['firstname']; ?></td>
          <td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['gender']; ?></td>
          <td> <a href="update.php?id=<?php echo $row['id']; ?> " class="btn btn-info">Edit</a> &nbsp; <a href="delete.php?id=<?php echo $row['id']; ?> " class="btn btn-danger">Delete </a> </td>
        </tr>
        <?php 
        }
      }
      ?>
      
      </tbody>
    </table>
  </div>
</body>
</html>