<?php
 require_once('logics/dbconnection.php');
 $sqlDeleteStudent = mysqli_query($conn, "DELETE FROM registrationdetails  WHERE no='".$_GET['id']."'");
 if($sqlDeleteStudent)
 {
    echo "User deleted successfully";
    header('location: student.php');
 }
 else
 {
    echo "Error occured. Please try again!";
 }
 ?>