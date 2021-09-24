<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<div class="name">
    <input type="text" name="name" id="">
</div>
<!-- <div class="email">
    <input type="text" name="email" id="">

</div> -->
<div class="trans">
    <input type="text" name="trans" id="">
</div>
<div class="submit">
    <input type="submit" value="Submit" name="submit">
</div>
</form>
</body>
</html>



<?php
include 'connections.php';




if(isset($_POST['submit'])){
    $name=$_POST['name'];
    //   $email=$_POST['email'];
       $trans=$_POST['trans'];
    $query=" update website set transactions='$trans' where name='$name'  ";
   $data= mysqli_query($con,$query);
if($data){
    ?>
    <script>
        alert('Transactions added ');
        </script>
<?php
}
else{
    ?>
    <script>
        alert('Transactions are not added ');
        </script>
<?php
}
$selectquery=" select * from website where name='$name' ";
$select=mysqli_query($con,$selectquery);
$arrdata=mysqli_fetch_array($select);
echo $arrdata['transactions'];
}

?>
