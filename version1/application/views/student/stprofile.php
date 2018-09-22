<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>	
	
		<div class="row"><div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card m-3 border-danger">
					<div class="card-header  text-center"><?php echo $title; ?></div>
						<div class="card-body">
                            <div  style="color: red; background: #dc3;">
                                <?php echo validation_errors(); ?>
                            </div>
							<?php echo form_open('Student/student_prof'); ?>
                            <div class="row">
                             <div class="form-group col-md-6">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="form-group col-md-6" >
                                <label for="name">Email Address</label>
                                <input type="email" class="form-control" value="<?php if($this->session->userdata('logged_in')) : ?>
            <?php echo $this->session->userdata('email');?>
            <?php endif; ?>">
                            </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input type="tel" name="phone_no" class="form-control" placeholder="Enter your Phone number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Yeay of study</label>
                                    <input type="number" name="yeah_of_study" class="form-control" placeholder="Enter yeah of study">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Sex</label>
                                    <select name="sex" class="form-control">
                                        <option></option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6"> 
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control">
                                </div>
                            </div>    
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Birth place</label>
                                    <input type="text" name="birth_place" class="form-control" placeholder="Enter place you was born">
                                </div>							
                                <div class="form-group col-md-6">
                                    <label>Current Location</label>
                                    <input type="text" name="current_location" class="form-control" placeholder="Enter place you living now">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="school">Collage/University Name</label>
                                    <input type="text" class="form-control" placeholder="Enter school you study" name="school">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Department</label>
                                                <select name="dept_id" class="form-control">
                                                    <option value="">--Select Depertment--</option>
                                                    <?php foreach ($dept as $program): ?>
                                                    <option value="<?php echo $program['id']; ?>"><?php echo $program['dept_name']; ?> </option>
                                                    <?php endforeach; ?>  
                                                </select>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="job"> Job Status</label>
                                    <select name="job_status" id="" class="form-control">
                                        <option value="">--select staus--</option>
                                        <option value="Internship">Internship</option>
                                        <option value="Student">Student</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Employed">Employed</option>
                                        <option value="Unemployed">Unemployed</option>
                                    </select>
                                </div>
                            </div>                 
							
							
                           
                            				
							<button class="btn btn-primary" type="submit">Submit</button><a href="view_profile">View profile</a>
						</div>	
					<div class="card-footer border-danger text-danger text-center">Update your profile to be viewed by others</div>
				</div>
			</div><div class="col-sm-2"></div>
		</div>