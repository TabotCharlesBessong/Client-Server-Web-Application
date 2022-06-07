<?php



// $gender=$_POST['gender'];
// $address=$_POST['address'];


	// $sql= "INSERT INTO users(userFirstName,userLastName,usergender,useraddress) VALUES ('$first','$last','$gender','$address');";
	// $result=mysqli_query($conn,$sql);

	// header("Location: index.php?Signup=successful");//this takes us back to our index file.


    if (isset(($_POST['submit']))) {

    include_once 'connection.php';

    $name=$_POST['name'];
    $pwd=$_POST['password'];

    if (empty($name) || empty($pwd)) {
        header("Location: ../pages/login.html?Signup=empty");
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
    //bind parameters to the placeholder(?)
   // mysqli_stmt_bind_param($pst, 's',$data);
    //run parameters inside database
    mysqli_stmt_execute($pst);

    $result=mysqli_stmt_get_result($pst);
    while ($row=mysqli_fetch_assoc($result)) {
        if ($name==$row['adminName'] && $pwd==$row['AdminPassword']) {
           echo 'Log in Successfull';
           header("Location: ../pages/index.html?Signup=successful");
           exit();
        }
        // echo $row['userFirstName']." ".$row['userLastName']."<br>";
}
}

        }
}
else{
    header("Location: ../pages/login.html");
}

?>