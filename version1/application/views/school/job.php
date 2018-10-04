<?php if($this->session->flashdata('job_post')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('job_post'). '</p>'; ?>
<?php endif; ?>
	
    <div class="row"><div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card m-3 border-danger">
					<div class="card-header  text-center"><?php echo $title; ?></div>
						<div class="card-body">
                            <div  style="color: red; background: #dc3;">
                                <?php echo validation_errors(); ?>
                            </div>
							<?php echo form_open('School/job'); ?>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Job Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <label for="name">Job Description</label>
                                    <textarea name="description" id="descrp" class="form-control" type="text" ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Application Start At</label>
                                    <input type="date" name="batch_date" class="form-control" placeholder="Example 25/07/2018">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Application End At</label>
                                    <input type="date" name="exp_date" class="form-control" placeholder="Example 25/07/2018">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Location</label>
                                    <input type="text" name="jlocation" class="form-control" placeholder="Enter place of work">
                                </div>
                                <div class="form-group col-md-6"> 
                                    <label>Job Type</label>
                                    <input type="text" name="job_type" placeholder="Full time/Part time" class="form-control">
                                </div>
                            </div>    
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Salary</label>
                                    <input type="text" name="salary" class="form-control" placeholder="Enter amount range / Cofidential">
                                </div>							
                                <div class="form-group col-md-6">
                                    <label>Job Function</label>
                                    <input type="text" name="job_function" class="form-control" placeholder="Enter Job function">
                                </div>
                            </div>
                            
                           
                            				
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>	
					<div class="card-footer border-danger text-danger text-center"></div>
				</div>
			</div><div class="col-sm-2"></div>
		</div>