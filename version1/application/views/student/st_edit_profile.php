<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>	
	
		<div class="row"><div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card m-3 border-danger">
					<div class="card-header  text-center"><?php echo $title; ?></div>
						<div class="card-body">
                            <div  style="color: red; background: #dc3; border-radius: 5px;">
                                <?php echo validation_errors(); ?>
                            </div>
							<?php echo form_open('Student/st_update_prof'); ?>                            
                            <?php foreach($profiles as $prof){?>
                            <input type="hidden" value="<?php $this->session->userdata('id');?>">
                            <div class="row">
                             <div class="form-group col-md-6">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" value="<?php echo $prof['name'];?> " disabled>
                            </div>
                            <div class="form-group col-md-6" >
                                <label for="name">Email Address</label>
                                <input type="email" class="form-control" value="<?php echo $prof['email'];?> " disabled>
                            </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input type="tel" name="phone_no" class="form-control" placeholder="Enter your Phone number" value="<?php echo $prof['phone_no'];?> "">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Yeay of study</label>
                                    <input name="yeah_of_study" class="form-control" placeholder="Enter yeah of study" value="<?php echo $prof['yeah_of_study'];?> "">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Sex</label>
                                    <select name="sex" class="form-control" value="<?php echo $prof['sex'];?> ">
                                        <option><?php echo $prof['sex'];?></option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6"> 
                                    <label>Date of Birth</label>
                                    <input  name="dob" placeholder="Enter Date of Birth" class="form-control" value="<?php echo $prof['dob'];?> ">
                                </div>
                            </div>    
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Birth place</label>
                                    <input type="text" name="birth_place" class="form-control" placeholder="Enter place you was born" value="<?php echo $prof['birth_place'];?> ">
                                </div>							
                                <div class="form-group col-md-6">
                                    <label>Current Location</label>
                                    <input type="text" name="current_location" class="form-control" placeholder="Enter place you living now" value="<?php echo $prof['current_location'];?> ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="school">Collage/University Name</label>
                                    <input type="text" class="form-control" placeholder="Enter school you study" name="school" value="<?php echo $prof['school'];?> ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Department</label>
                                                <select name="dept_id" class="form-control" >
                                                    <option value=""><?php echo $prof['dept_name'];?></option>
                                                    <?php foreach ($dept as $program): ?>
                                                    <option value="<?php echo $program['id']; ?>"><?php echo $program['dept_name']; ?> </option>
                                                    <?php endforeach; ?>  
                                                </select>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="job"> Job Status</label>
                                    <select name="job_status" id="" class="form-control" value="<?php echo $prof['job_status'];?> ">
                                        <option value=""><?php echo $prof['job_status'];?></option>
                                        <option value="Internship">Internship</option>
                                        <option value="Student">Student</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Employed">Employed</option>
                                        <option value="Unemployed">Unemployed</option>
                                    </select>
                                </div>
                            </div>  
							
                            <?php }?>             
                            				
							<button class="btn btn-primary" type="submit">Update profile</button>
						</div>	
					<div class="card-footer border-danger text-danger text-center">Update your profile to be viewed by others</div>
				</div>
			</div><div class="col-sm-2"></div>
		</div>