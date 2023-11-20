<?php 
$connection =mysqli_connect("localhost","root","password","studentdb");
if (!$connection) {
    echo "db not-connected";
}else{
    echo "db connected";
}

if(isset($_POST['submit'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];
    echo "hello user" . $username ;
    echo "your password " . $password;
    if(strlen($username)<5){
        echo 'enter a valid username';
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
