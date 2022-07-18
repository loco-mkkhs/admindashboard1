<?php
$message ='';
 require_once('logics/dbconnection.php');
$Querystudent = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'");
while($fetctcontactus = mysqli_fetch_array($Querystudent))
{
    $id = $fetctcontactus['no'];
    $firstname = $fetctcontactus['firstname'];
    $lastname = $fetctcontactus['lastname'];
    $phonenumber = $fetctcontactus['phonenumber'];
    $email = $fetctcontactus['email'];
    $messag = $fetctcontactus['message'];
    $time = $fetctcontactus['created_at'];
    
   
}
require_once('logics/contactus-update.php');


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
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student <?php echo $firstname?> </h4>
                            <?php echo $message ?>
                        </div>
                        <div class="card-body">
                            <form action="editcontactus.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="Firstname:" class="form label">Firstname:</label>
                                        <input type="text" name="firstname" value="<?php echo $firstname?>" class="form-control">

                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Lastname" class="form-label">Lastname:</label>
                                        <input type="text" name="lastname" value="<?php echo $lastname?>"  class="form-control">
                                       
                                        
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="Phone Number" class="form-label">Phone Number:</label>
                                        <input type="tel" name="phonenumber" value="<?php echo $phonenumber?>"  class="form-control">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Email" class="form-label">Email:</label>
                                        <input type="email" name="email" value="<?php echo $email?>"  class="form-control">
                                    </div>
                                   
                                </div>
                                <br>
                                <div class="row">
                                   
                                    <div class="mb-3 col-lg-6">
                                        <label for="Message" class="form-label">Message:</label>
                                        <input type="text" name="message" value="<?php echo $messag?>"  class="form-control">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Time" class="form-label">Time:</label>
                                        <input type="" name="created_at" value="<?php echo $time?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-6">
                                        <button type="submit" name="updatecontactus" class="btn btn-primary">Update records</button>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>		
	</div>	
	<?php require_once('includes/scripts.php')?>	
</body>
</html>