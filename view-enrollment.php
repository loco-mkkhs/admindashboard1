<?php
//1. database connection
require_once('logics/dbconnection.php');
$sqlFetchEnrolledStudent = mysqli_query($conn, "SELECT * FROM registrationdetails WHERE no='".$_GET['id']."'");
while($fetctregistrationdetails= mysqli_fetch_array($sqlFetchEnrolledStudent))
{
    $fullname = $fetctregistrationdetails['fullname'];
    $email = $fetctregistrationdetails['emailaddress'];
    $phonenumber = $fetctregistrationdetails['phonenumber'];
    $gender = $fetctregistrationdetails['gender'];
    $course = $fetctregistrationdetails['course'];
    $enrolledon = $fetctregistrationdetails['created_at'];
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
                                <li class="list-group-item">Full Name: <span class="float-right bagde bg-primary rounded-pill"><?php echo $fullname?></span></li>
                                <li class="list-group-item">Email: <span class="float-right bagde bg-success rounded-pill"><?php echo $email?></span></li>
                                <li class="list-group-item">Phone Number: <span class="float-right  bagde bg-danger rounded-pill"><?php echo $phonenumber?></span></li>
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
                                <li class="list-group-item">Gender:<span class="float-right bagde bg-dark text-white rounded-pill"><?php echo $gender?></span></li></li>
                                <li class="list-group-item">Course:<span class="float-right bagde bg-danger text-white rounded-pill"><?php echo $course?></span></li></li>
                                <li class="list-group-item">Enrolled On:<span class="float-right bagde bg-success text-white rounded-pill"><?php echo $enrolledon?></span></li></li>
                            </ul>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>		
	</div>	
 <?php require_once('includes/scripts.php')?>	
</body>
</html>