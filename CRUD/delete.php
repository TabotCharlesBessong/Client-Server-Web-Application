
<?php
  include 'config.php';

  if(isset($_GET['id'])){
    $userId = $_GET['id'];
  }

  $sql = 'DELETE FROM users WHERE id="$userId" ';

  $result = $conn->query($sql);

  if($result ==TRUE){
    echo "Record deleted succesfully";
  }else{
    echo "Error" .$sql . "<br/>". $conn->error ;
  }
?>