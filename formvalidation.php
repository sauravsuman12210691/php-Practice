<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
</head>
<body>
    <?php
    $name = $email = $gender=$comment =$website =" ";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
    function test_input($data){
        $data = trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
    }
?>
<form action="formvalidation.php" method="POST">
    name: 
</form>
</body>
</html>