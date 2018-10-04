
<?php if(!($this->session->userdata('user_id'))){
	echo "You are required to login first";
	}?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6"><?php echo form_open('Student/update_article');?>
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h4>Article</h4></div>
				<div class="form-group" style="color: red;"><?php echo validation_errors();?> </div>
                <?php foreach($articles as $art){?>
				<input type="hidden" value="<?php echo $art['id'];?> " name="id">
				<div class="form-group">
					<label>Article Title</label>
					<input type="text" name="title" placeholder="Article Title" class="form-control" value="<?php echo $art['title'] ?>">
				</div>
				<div class="form-group">
					<label>Article Desciption</label>
					<textarea class="form-control" type="text" name="description" ><?php echo $art['description'] ?></textarea>
				</div>
				
				<div class="form-group">
					<button class="btn btn-info" >Update</button><a href="varticle" class="btn btn primary">view article</a>
				</div>
			</div>
                <?php }?> 
		</div><?php echo form_close();?>
	</div>
	<div class="col-md-2"></div>
</div>