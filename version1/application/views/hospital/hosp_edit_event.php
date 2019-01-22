<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	
	<form method="post" action="<?php echo base_url();?>index.php/Hospital/update_event"  enctype="multipart/form-data">
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h4>Event</h4></div>
				<div class="form-group" style="color: red;"><?php echo validation_errors();?> </div>
                <?php foreach($event as $evt){?>
                <input type="hidden" name="id"   value="<?php echo $evt['id']; ?>">

				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" placeholder="Event title" class="form-control" value="<?php echo $evt['title']; ?>">
				</div>
				<div class="form-group">
					<label>Event Desciption</label>
					<textarea class="form-control" type="text" name="description"><?php echo $evt['description']; ?></textarea>
				</div>
				<div class="form-group">
					<label>Location</label>
					<input type="text" name="location" placeholder="Location Event hold on" class="form-control" value="<?php echo $evt['location']; ?>">
				</div>
				<div class="form-group">
					<label>Upload photo</label>
					<input class="form-control" type="file" name="photo" value="<?php echo $evt['photo']; ?>">
				</div>
				
				<div class="form-group">
					<button class="btn btn-info">update </button> 
				</div>
                <?php }?>
			</div>
		</div></form>
	</div>
	<div class="col-md-2"></div>
</div>