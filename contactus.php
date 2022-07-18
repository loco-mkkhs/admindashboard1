<?php require_once('logics/dbconnection.php')?>
<?php $sql=mysqli_query($conn, "SELECT * FROM contactus");?>

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
						<span>Messages</span>
					</div>
                    <div class="card-body ">
                        <table class="table table-striped table-hover table-secondary table-responsive " style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>firstname</th>
									<th>Lastname</th>
                                    <th>phone</th>
                                    <th>Email</th>
									<th>message</th>                                   
                                    <th>Time</th>
									<th>Action</th>
                                </tr>
                            </thead>
							<tbody>
							<?php while ($fetchcontactus = mysqli_fetch_array($sql)) {?>
								<tr>
	    							<td> <?php echo $fetchcontactus['no']?></td>
									<td> <?php echo $fetchcontactus['firstname']?></td>
									<td> <?php echo $fetchcontactus['lastname']?></td>
									<td> <?php echo $fetchcontactus['phonenumber']?></td>
	    							<td> <?php echo $fetchcontactus['email']?></td>
									<td> <?php echo $fetchcontactus['message']?></td>
									<td> <?php echo $fetchcontactus['created_at']?></td>


									

									<td>
										<a href="editcontactus.php?id=<?php echo $fetchcontactus ['no']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
										<a href="viewcontactus.php?id=<?php echo $fetchcontactus['no']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
										<a href="deletecontactus.php?id=<?php echo $fetchcontactus ['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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