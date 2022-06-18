

<?php

session_start();
   // include_once 'connection.php';
$num=rand(10,100);
    $_SESSION['operator'] = $_POST['operator'];
    $_SESSION['phone']=  $_POST['phone'];
    $_SESSION['id']=  $_POST['id'];
    $_SESSION['origin']=  $_POST['origin'];
    $_SESSION['dest']=  $_POST['dest'];
    $_SESSION['price']=  $_POST['price'];
    $_SESSION['name']=  $_POST['name'];

//include "../documents/ticket.php";
    header("Location: ../documents/ticket.php?Tick=successful");

	?>