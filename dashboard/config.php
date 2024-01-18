<!-- written to connect the database from the server which is localhost -->
<?php
$con=mysqli_connect("localhost","root","","work_reporting");
if($con) {
    echo "";
}
else 
{
    echo "DB not connected";
}

?>