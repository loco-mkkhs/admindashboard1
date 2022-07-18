<?php
// updating user records
require_once('logics/dbconnection.php');
if(isset($_POST['updatecontactus']))
{
    // fetch form data
  
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $phonenumber= $_POST['phonenumber'];
    $email= $_POST['email'];
    $messag= $_POST['message'];  
    $time= $_POST['created_at'];
    // perform the sql query

    $updatecontactus = mysqli_query ($conn,"UPDATE contactus set firstname='$firstname',lastname='$lastname',phonenumber='$phonenumber',email='$email',message='$messag',created_at='$time' WHERE no='".$_GET['id']."' ");

    if($updatecontactus)
    {
        $message="Records were updated successfully";
    }
    else{
        $message="Error occured whiel updating user details";
    }


}

?>