<?php
$username="root";
$password="";
$server="localhost";
$db="ca";
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>

alert("Connection successfull");

        </script>
<?php
}
else{
    ?>
    <script>

alert("Connection unsuccessfull");

        </script>
<?php
}



?>