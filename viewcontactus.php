<?php
//1. database connection
require_once('logics/dbconnection.php');
$sqlFetchStudentContact = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'");
while($fetchcontactus= mysqli_fetch_array($sqlFetchStudentContact))
{
    $firstname = $fetchcontactus['firstname'];
    $lastname = $fetchcontactus['lastname'];
    $email = $fetchcontactus['email'];
    $phonenumber = $fetchcontactus['phonenumber'];
    $messag = $fetchcontactus['message'];
    $time = $fetchcontactus['created_at'];
}
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>	
	<div class="sidebar">
		<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content pt-5">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">   
                            <h4 class="card-title">Personal Infomation</h4>    
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Firstname: <span class="float-right bagde bg-primary rounded-pill"><?php echo $firstname?></span></li>
                                <li class="list-group-item">Lastname: <span class="float-right bagde bg-success rounded-pill"><?php echo $lastname?></span></li>
                                <li class="list-group-item">Email: <span class="float-right  bagde bg-danger rounded-pill"><?php echo $email?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">   
                            <h4 class="card-title">Other Infomation</h4>    
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Phone Number:<span class="float-right bagde bg-dark text-white rounded-pill"><?php echo $phonenumber?></span></li></li>
                                <li class="list-group-item">Message:<span class="float-right bagde bg-danger text-white rounded-pill"><?php echo $messag?></span></li></li>
                                <li class="list-group-item">Time:<span class="float-right bagde bg-success text-white rounded-pill"><?php echo $time?></span></li></li>
                            </ul>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>		
	</div>	
 <?php require_once('includes/scripts.php')?>	
</body>