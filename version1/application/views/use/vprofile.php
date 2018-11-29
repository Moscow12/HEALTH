 <?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/Users/login');
	}?>
 
	<?php if($this->session->flashdata('doctor_profile')):  ?>    
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('doctor_profile'). '</p>'; ?>
            <?php endif; ?>
	<div class="row"><div class="col-md-3"></div>
    <div class="col-md-6">
			<div class="card">
				<div class="card card-header"><h3 class="text-center"><?php echo $title; ?></h3></div>
					<div class="card body">
						<table class="table-bordered"> 
								
								<tbody>
								<?php  foreach($profiles as $ona){?>
									<tr> 
										<th>Name</th>
										<td><?php echo $ona['name'] ?></td>
									</tr>	
									<tr>	
										<th>Email</th>
										<td><?php echo $ona['email']; ?></td>
									</tr>
									<tr> 
										<th>Work Lisence</th> 
										<td><?php echo $ona['lessen']; ?></td>
									<tr>
									<tr>	
										<th>Profetional</th>
										<td><?php echo $ona['professional']; ?></td>
									</tr>
									<tr>	
										<th>Date of Birth</th>
										<td><?php echo $ona['dob'];?></td>
									</tr>
									<tr>	
										<th>Gender</th>
										<td><?php echo $ona['sex']; ?></td>
									</tr>
									<tr>	
										<th>Phone Number</th>
										<td><?php echo $ona['phone']; ?></td>
									</tr>
									<tr>	
										<th>Location </th>
										<td><?php echo $ona['location']; ?></td>
									</tr> 
									<tr> 
										<th>Department</th> 
										<td><?php echo $ona['dept_name']; ?></td>
									<tr>
									<tr> 
										<th>Experience</th> 
										<td><?php echo $ona['experience']; ?></td>
									<tr>
									<tr> 
										<th>Region</th> 
										<td><?php echo $ona['region']; ?></td>
									<tr>
									<tr> 
										<th>District</th> 
										<td><?php echo $ona['dept_name']; ?></td>
									<tr>
									<tr> 
										<th>Ward</th> 
										<td><?php echo $ona['ward']; ?></td>
									<tr>
									<?php  }?> 

							
								</tbody> 
							</table>
							<form action="update">
							<div class="focrm-group">
								<a href="doctor_prof" type="submit" class="btn btn-info ">Edit Profile</a> 
							</div>
							</form>
					</div>	<p><br><br></p>
				</div>			
			</div><div class="col-md-3"></div>
    </div>