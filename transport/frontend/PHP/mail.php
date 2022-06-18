

<?php

if (isset(($_POST['submit']))) {
        
    include_once 'connection.php';

    $sender=mysqli_real_escape_string($conn, $_POST['sender']);
    $receiver=mysqli_real_escape_string($conn, $_POST['receiver']);
    $origin=mysqli_real_escape_string($conn, $_POST['origin']);
    $destination=mysqli_real_escape_string($conn, $_POST['destination']);
    $description=mysqli_real_escape_string($conn, $_POST['description']);

if (empty($sender) || empty($receiver) ||empty($origin) || empty($description)|| empty($destination)) {
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location: ../pages/mail.html?creation=empty");
    exit();
    }
    else{

        $sql= "INSERT INTO mail(senderName,recieverName,origin,destination,Package_description) VALUES ('$sender','$receiver','$origin','$destination','$description');";
        $result=mysqli_query($conn,$sql);
    
        header("Location: ../pages/subAdmin.html?Mail=successful");//this takes us back to our index file.
        
}
}

 else{
    header("Location: ../pages/mail.html");
}

	?>