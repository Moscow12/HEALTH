
<?php if(!($this->session->userdata('user_id'))){
	echo "You are required to login first";
	}?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6"><?php echo form_open('Student/article'); ?>
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h4>Article</h4></div>
				<div class="form-group" style="color: red;"><?php echo validation_errors();?> </div>
				<div class="form-group">
					<label>Article Title</label>
					<input type="text" name="title" placeholder="Article Title" class="form-control">
				</div>
				<div class="form-group">
					<label>Article Desciption</label>
					<textarea class="form-control" type="text" name="description"></textarea>
				</div>
				
				<div class="form-group">
					<button class="btn btn-info">Submit</button><a href="varticle" class="btn btn-success">view article</a>
				</div>
			</div>
		</div><?php echo form_close();?>
	</div>
	<div class="col-md-2"></div>
</div>