<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="email" name="email">
        <input type="submit" value="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $email = $_POST['email'];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<br>Email is valid";
        }else{
            echo "<br> Email is not valid";
        }
    }?>
</body>
</html>