<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/Users/login');
	}?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6"><?php echo form_open('School/service'); ?>
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h3>Services</h3></div>
				<div class="form-group"><?php echo validation_errors();?> </div>
				<div class="form-group">
					<label>Service name</label>
					<input type="text" name="service_name" placeholder="Service name" class="form-control">
				</div>
				<div class="form-group">
					<label>Service Desciption</label>
					<textarea class="form-control" type="text" name="description"></textarea>
				</div>				
				<div class="form-group">
					<button class="btn btn-info">Submit</button><a href="view_service" class="btn  btn-info">View Service</a>
				</div>
			</div>
		</div><?php echo form_close();?>
	</div>
	<div class="col-md-2"></div>
</div>
<br/><br/>


