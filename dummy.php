<?php
$_server="localhost";
$username="root";
$password="";
$database="zalego";
$conn=mysqli_connect($_server,$username,$password,$database);

$sql=mysqli_query($conn, "SELECT * FROM registrationdetails");
while ($fetchRecords=mysqli_fetch_array($sql)){
    echo $fetchRecords ['fullname'].$fetchRecords ['phonenumber'].$fetchRecords['emailaddress'].$fetchRecords['gender'].$fetchRecords['course']. '<br>';
}

?>





									