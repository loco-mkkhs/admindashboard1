<?php
 require_once('logics/dbconnection.php');
 $sqldeletestudentcontact = mysqli_query($conn, "DELETE FROM contactus  WHERE no='".$_GET['id']."'");
 if($sqldeletestudentcontact)
 {
    echo "User deleted successfully";
    header('location: contactus.php');
 }
 else
 {
    echo "Error occured. Please try again!";
 }
 ?>