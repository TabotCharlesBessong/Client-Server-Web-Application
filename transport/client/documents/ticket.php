<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ticket.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="ticket" id="tick">
            <h1>Ticket</h1>

            <?php
            session_start();
           // include_once '../PHP/payment.php';
            echo "<div id='nameHolder'>
                <h1>". $_SESSION['name']."</h1>
            </div>
            <div id='sidHolder'>
            <h1>".$_SESSION['id']."</h1>
            </div>
            <div id='seatHolder'>
            <h1>". $_SESSION['phone']."</h1>
            </div>
            <div id='originHolder'>
            <h1>".$_SESSION['origin']."</h1>
            </div>
            <div id='destinationHolder'>
            <h1>".$_SESSION['dest']."</h1>
            </div>
            <div id='priceHolder'>
            <h1>". $_SESSION['price']."</h1>
            </div>";

            ?>
        </div>
    </div>
    <!--script src="../js/dropdown.js"></script-->
</body>
</html>