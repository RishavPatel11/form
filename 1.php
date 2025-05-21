<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name:<input type="text" name="name">
        Email:<input type="text" name="mail">
        Password:<input type="password" name="pass">
        <input type="submit" name="sbt">
    </form>
    <?php
       $con = mysqli_connect('localhost','root','','users');
       if(isset($_POST['sbt']))
       {
        $name=$_POST['name'];
        $email=$_POST['mail'];
        $password=$_POST['pass'];

        $query="INSERT INTO mydata(name,email,password)values('$name','$email','$password')";
        $execute=mysqli_query($con,$query);
       }
    ?>
</body>
</html>