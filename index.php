<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta <name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main_div">
        <form method="POST">
        <div class="name">
            <input type="text" name="name" id="" placeholder="Name">
        </div>
        <div class="number">
            <input type="number" name="number" id="">
        </div>
        <div class="email">
            <input type="text" name="email" id="">

        </div>
        <div class="password">
            <input type="text" name="password" id="">
        </div>
        <div class="submit">
            <input type="submit" value="Submit" name="submit">
        </div>
        </form>
    </div>

</body>
</html>
 <?php
if(isset($_POST['submit'])){
include 'connections.php';
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $query=" insert into website(name,number,email,password) values('$name',$number,'$email','$password') ";

    mysqli_query($con,$query);
header("Location: transactions.php");

}



?> 