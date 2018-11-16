<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card card-secondary">
            <div class="card-header"><?php echo $title;?></div>
            <div class="card-body">
                <div  style="color: red; background: #dc3;">
                    <?php echo validation_errors(); ?>
                </div>
                <?php echo form_open('Shop/shop_update_prof'); ?>
                <?php foreach($profiles as $profile){?>
                    <input type="hidden" value="<?php $this->session->userdata('id');?>">

                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Name:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?php echo $profile['name']; ?>">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Email:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled value="<?php echo $profile['email']; ?>">
                        </div>
                    </div>
                
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Phone:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" name="shop_phone" value="<?php echo $profile['shop_phone']; ?>">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Lessence number:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lessen" value="<?php echo $profile['lessen']; ?>">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Region:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="region" value="<?php echo $profile['region']; ?>">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">District:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="district" value="<?php echo $profile['district']; ?>">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                            <div class="col-sm-2">
                                <label for="">Ward:</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="ward" value="<?php echo $profile['ward']; ?>">
                            </div>
                        
                            <div class="col-sm-2">
                                <label for="">Street: </label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="street" value="<?php echo $profile['street']; ?>">
                            </div>
                        
                        <!-- <div class="form-group  col-sm-10">
                            <label for="street">Street</label>
                            <input type="text" class="form-control" name="street">
                        </div> -->
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="">Address:</label>                        
                        </div>
                        <div class="col-sm-10">
                            <textarea name="address" id="" cols="30" rows="10" class="form-control"><?php echo $profile['address']; ?></textarea>
                        </div>
                    </div>
                </div><?php }?>
            <div class="form-group row col-sm-12">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                    <button class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2"></div>

</div>
