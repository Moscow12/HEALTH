
<div class="row">
            <div class="col-md-2"></div>
          
            <div class="col-md-8 grid-margin stretch-card" style="border-color: red;">
              <div class="card"><div class="card card-header"><?php echo $title; ?></div>
                <div class="card-body">
                  <div class="form-group" style="color: red;">
                        <?php echo validation_errors(); ?>
                  </div>
                  <?php echo form_open('register/doctor_prof'); ?>
                    <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $this->session->userdata('name');?>"  placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Email</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="<?php if($this->session->userdata('logged_in')) : ?>
            <?php echo $this->session->userdata('email');?>
            <?php endif; ?>" placeholder="Email">
        
             </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail3">Phone Number</label>
                      <input type="number" class="form-control" name="phone" id="exampleInputEmail3" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Lessen</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="lessen" name="lessen">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Region</label>
                      <input type="text" class="form-control" name="region" id="exampleInputPassword4" placeholder="Region">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">District</label>
                      <input type="text" name="district" class="form-control" id="exampleInputPassword4" placeholder="District">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Ward</label>
                      <input type="text" class="form-control" name="ward" id="exampleInputPassword4" placeholder="Ward">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Years of experience</label>
                      <input type="number" name="experience" class="form-control" id="exampleInputPassword4" placeholder="Years of experience">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Professional</label>
                      <select name="professional" class="form-control input-md">
                        <option value="">--Select--</option>
                        <option>General Doctor</option>
                        <option>Specialist</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Depertment</label>
                       <select name="dept_id" class="form-control input-md" id="phone" data-rule="required" data-msg="Your role is required">
                                 <option value="" align="center">--Select role--</option>
                                <?php foreach ($dept as $department){ ?>

                                  <option value="<?php echo $department['id']; ?>"><?php echo $department['name']; ?> </option>
                                <?php }  ?>
                              </select>
                    </div>
                  </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Address</label>
                      <textarea class="form-control" id="exampleTextarea1" name="address"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Sex</label>
                      <select class="form-control input-md" name="sex">
                        <option>--Select--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                  </div>
                   <div class="row">
                    <div class="form-group col-md-6 col-offset-6">
                      <label for="exampleInputPassword4">Profile picture</label>
                      <input type="file" class="form-control" name="pic" id="exampleInputPassword4" placeholder="Photo">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword4">Date of Birth</label>
                      <input type="date" name="dob" class="form-control" id="exampleInputPassword4" placeholder="Date birth">
                    </div>
                  </div>                 
                    <button type="submit" class="btn btn-info mr-6" >Submit</button>
                  </form>
                </div>
              </div>
            </div><?php echo form_close(); ?>
            <div class="col-md-2"></div>
          </div>