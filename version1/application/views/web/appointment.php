<p></p><br><br><br><br><br>

<section class="appointment">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-4">
                <p class="jumbotron">
                    Make an appointment with the doctor you are looking for. If you don't know any go back to 
                    <a href="<?=base_url();?>/index.php/Tanza/doctors"><u>Website</u> </a>
                    to view more doctors their profile <br>
                    On making appointment choose the doctor you want.
                </p>
            </div>
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-header header-center"><?php echo $title;?></div>
                    <div class="panel-body">
                    <?php echo form_open('Tanza/appointment');?>
                    <!-- <div class="form-group" style="color: red;"><?php echo validation_errors();?> </div> -->
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name" class="col-md-4">Full name</label>
                                <input type="text" class="form-control col-md-4" placeholder="Enter full name" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name" class="col-md-4">Location</label>
                                <input type="text" class="form-control col-md-10" placeholder="Enter your Location" name="location">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="phonenumber" class="col-md-4">Phone Number</label>
                                <input type="tel" class="form-control" name="phone_number" placeholder="Enter your Phone number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="doctor_id" class="col-md-4">Choose Doctor</label>
                                <select name="doctor_id" id="doctor_id" class="form-control">
                                    <option value="">Select name</option>
                                    <?php foreach($doctor as $doctors){?>
                                        <option value="<?php echo $doctors['id'];?>"><?php echo $doctors['name'];?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <button class="btn btn-success btn-skin" value="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
