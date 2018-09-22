<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <?php if($this->session->flashdata('student_profile')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('student_profile'). '</p>'; ?>
<?php endif; ?>

	<div class="row"><div class="col-sm-2"></div>
    <div class="col-md-8">
			<div class="card m-3 border-success">
				<div class="card card-header border-success"><h4 class="text-center"><?php echo $title; ?></h4></div>
					<div class="card body">
					<table class="table-striped table-bordered" > 
							<tbody>
							<?php foreach($profiles as $stprofile_view){?>
								<tr> 
									<th>Name Full</th>
									<td><?php echo $stprofile_view['name']; ?></td>
								</tr>	
								<tr>	
									<th>Email Address</th>
									<td><?php echo $stprofile_view['email']; ?></td>
								</tr>
                                <tr>	
									<th>Place of Birth</th>
									<td><?php echo $stprofile_view['birth_place']; ?></td>
								</tr>
								<tr>	
									<th>Current Location</th>
									<td><?php echo $stprofile_view['current_location']; ?></td>
								</tr>
								<tr>	
									<th>Date of Birth</th>
									<td><?php echo $stprofile_view['dob'];?></td>
								</tr>
								<tr>	
									<th>Gender</th>
									<td><?php echo $stprofile_view['sex']; ?></td>
								</tr>
								<tr>	
									<th>Phone Number</th>
									<td><?php echo $stprofile_view['phone_no']; ?></td>
								</tr>
								<tr>	
									<th>Colloge/university</th> 
									<td><?php echo $stprofile_view['school']; ?></td>
								</tr> 
								<tr> 
									<th>Department</th> 
									<td><?php echo $stprofile_view['dept_name']; ?></td>
								<tr> 
                                <tr>
                                    <th>Year of study</th>
                                    <td><?php echo $stprofile_view['yeah_of_study'];?> </td>
                                </tr>
                                <tr>
                                    <th>Job status
                                        <td><?php echo $stprofile_view['job_status'];?> </td>                                    
                                </tr>
								<?php }?>
							</tbody> 
						</table>
					</div>
					<form action="update">
						<div class="focrm-group">
							<a href="studentedit_profile" class="btn btn-info ">Edit Profile</a>
						</div>
					</form>
					<div class="card card-footer border-success"></div>
				</div>		
			</div><div class="col-sm-2"></div>
    </div>