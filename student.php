<?php require_once('logics/dbconnection.php')?>
<?php $sql=mysqli_query($conn, "SELECT * FROM registrationdetails");?>

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
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
                    <div class="card-body ">
                        <table class="table table-striped table-hover table-dark " style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>fullname</th>
                                    <th>phone</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Gender</th>
									<th>Enrolled On</th>
									<th>Action</th>
                                </tr>
                            </thead>
							<tbody>
							<?php while ($fetctregistrationdetails=mysqli_fetch_array($sql)) {?>
								<tr>
	    							<td> <?php echo $fetctregistrationdetails['no']?></td>
									<td> <?php echo $fetctregistrationdetails['fullname']?></td>
									<td> <?php echo $fetctregistrationdetails['phonenumber']?></td>
	    							<td> <?php echo $fetctregistrationdetails['emailaddress']?></td>
									<td> <?php echo $fetctregistrationdetails['course']?></td>
									<td> <?php echo $fetctregistrationdetails['gender']?></td>						
									<td> <?php echo $fetctregistrationdetails['created_at']?></td>


									

									<td>
										<a href="editenrollment.php?id=<?php echo $fetctregistrationdetails['no']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="view-enrollment.php?id=<?php echo $fetctregistrationdetails['no']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
										<a href="delete-enrollment.php?id=<?php echo $fetctregistrationdetails['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
										
								</tr>
							<?php }?>
								
								
								
							</tbody>
                        </table>
                    </div>
				</div>		
            </div>
        </div>
		
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>