
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6"><?php echo form_open('Register/service'); ?>
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h3>service</h3></div>
				<div class="form-group"><?php echo validation_errors();?> </div>
                <?php foreach($edit as $sav){?>
				<div class="form-group">
					<label>Service name</label>
					<input type="text" name="service_name"  class="form-control" value="<?php echo $sav['service_name']; ?>">
				</div>
				<div class="form-group">
					<label>Service Desciption</label>
					<textarea class="form-control" type="text" name="description" value="<?php echo $sav['description']; ?>"> </textarea>
				</div>
				<?php }?>
				<div class="form-group">
					<button class="btn btn-info">Update Services</button>
				</div>
			</div>
		</div><?php echo form_close();?>
	</div>
	<div class="col-md-2"></div>
</div>