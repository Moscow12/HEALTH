<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6"><?php echo form_open('Register/service_time'); ?>
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h4>Time Schedule</h4></div>
				<div class="form-group" style="color: red;"><?php echo validation_errors();?> </div>
				<div class="form-group">
					<label>Sevice name</label>
					<select class="form-control" name="service_id">
						<option value="">--select service--</option>
						<?php foreach($Service as $service): ?>
							<option value="<?php echo $service['id']; ?> "><?php echo $service['service_name']; ?> </option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="form-group">
					<label>Service Day</label>
					<select class="form-control" name="day">
						<option value="">--Select Day--</option>
						<option>Monday</option>
						<option>Tuesday</option>
						<option>Wednesday</option>
						<option>THusday</option>
						<option>Friday</option>
						<option>Satuday</option>
						<option>Sunday</option>
					</select>
				</div>
				<div class="form-group">
					<label>Service Time</label>
					<input type="time" name="time" class="form-control">
					
				</div>
				
				
				<div class="form-group">
					<button class="btn btn-info"><i class="fa fa-fw fa-plus"></i> Add</button>
				</div>
			</div>
		</div><?php echo form_close();?>
	</div>
	<div class="col-md-2"></div>
</div>