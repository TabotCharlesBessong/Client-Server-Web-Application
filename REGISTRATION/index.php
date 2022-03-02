
<!DOCTYPE html>
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
  <form action="./contact.php" method="post" style="display: flex; flex-direction:column; justify-content:space-around;align-items:center" >
    <label for="user">Name</label>
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
</html>