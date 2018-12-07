    <div>
    <?php if($this->session->flashdata('shop_profile')):?>
        <?php echo '<p class="alert alert-success alert-dismissable">'.$this->session->flashdata('shop_profile').'</p>'?>
<?php endif;?>
    </div>
    <div class="row">
    <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header"><?php echo $title;?></div>
                <div class="card-body">
                    <table class="table table-hover table-tripped table-condensed">
                        <tbody>
                            <?php foreach($profiles as $profile){?>
                                <tr>
                                    <th>Name:</th>
                                    <td><?php echo $profile['name'];?></td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td><?php echo $profile['email'];?></td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td><?php echo $profile['shop_phone'];?></td>
                                </tr>
                                <tr>
                                    <th>Lisence Number:</th>
                                    <td><?php echo $profile['lessen'];?></td>
                                </tr>
                                <tr>
                                    <th>Region:</th>
                                    <td><?php echo $profile['region'];?></td>
                                </tr>
                                <tr>
                                    <th>District:</th>
                                    <td><?php echo $profile['district'];?></td>
                                </tr>
                                <tr>
                                    <th>Ward:</th>
                                    <td><?php echo $profile['ward'];?></td>
                                </tr>
                                <tr>
                                    <th>Stret:</th>
                                    <td><?php echo $profile['street'];?></td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td><?php echo $profile['address'];?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div><a class="btn btn-primary" href="shop_edit_profile" >Update Profile</a>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>