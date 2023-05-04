<!--
    Create connection with frontend -->

<?php
$host="localhost";
$user="root";
$pass="";
$db="demo";

$con=mysqli_connect($host,$user,$pass,$db);

if($con)
{
echo "OK";
}
else
{
    echo "Database not connected";
}


?>
<!-- Inserting Data -->
