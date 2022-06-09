<?php

    if (isset(($_POST['submit']))) {
        
    include_once 'connection.php';

    $name=$_POST['name'];
    $pwd=$_POST['password'];

    if (empty($name) || empty($pwd)) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        header("Location: ../pages/Adminlogin.html?Signup=empty");
        exit();
        }
        else{
// $data = 'Bebongnchu';

//Create a Template
$sql= "SELECT * FROM admin ;";
//Create a prepared Statement
$pst=mysqli_stmt_init($conn);
//Prepare the prepared statement
if (!mysqli_stmt_prepare($pst, $sql)) {
    echo 'MYSQL Connection failed';
}
else{
  
    mysqli_stmt_execute($pst);

    $result=mysqli_stmt_get_result($pst);
    while ($row=mysqli_fetch_assoc($result)) {
        if ($name==$row['adminName'] && $pwd==$row['AdminPassword']) {
           echo 'Log in Successfull';
           header("Location: ../pages/AdminHomepage.html?Signup=successful");
           exit();
        }else{
          
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';

           header("Location: ../pages/Adminlogin.html?Signup=unsuccessful");

           exit();
        }
}
}

        }
}
else{
    header("Location: ../pages/Adminlogin.html");
}

?>