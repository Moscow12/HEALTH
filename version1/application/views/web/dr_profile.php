
<br><br><br><br><br><br><br>
<div class="container" id="profile" >
  <div class="row">
      <div class="col-md-12">
              <div class="col-md-3">
                <div class="thumbnail">
                  <a href="<?=base_url();?>assets/img/dummy/mesh.jpg"></a><img src="<?=base_url();?>assets/img/dummy/mesh.jpg" alt=""></a>
                  <div class="caption">
                  <?php foreach($prof as $profile){?>           
                   <p class="col-md-2">Dr.</p><?php echo $profile['name'];?>                    
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <?php foreach($prof as $profile){?>
                  
                    <Strong class="col-md-2">Proffetional</Strong><p class="col-md-6"></p><?php echo $profile['professional'];?><br>
                    <Strong class="col-md-2">Sex</Strong><p class="col-md-6"></p><?php echo $profile['sex'];?><br>
                    <Strong class="col-md-2">Age</Strong><p class="col-md-6"></p><?php #echo $profile['age'];?><br>
                    <Strong class="col-md-2">Location</Strong><p class="col-md-6"><?php echo $profile['region'];?></p><br>
                  <?php } ?> 
                  
              </div>
              <div class="col-md-9">
              <h4>Description</h4>
                  mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                  mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                  mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                  mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
              </div>          
             
      </div>

      
  </div> 
  <!-- <div class="media">
    <div class="media-left meadia-top ">
        <img src="<?=base_url();?>assets/img/dummy/img-1.png" class="media-object" alt="" height="200px" width="200px"><br>
        
    </div>
    <div class="media-body">
      <h4 class="meadia-heading">This is heading</h4>
      <?php foreach($prof as $profile){?>
                    <Strong class="col-md-2">Proffetional</Strong><p class="col-md-6"></p><?php echo $profile['professional'];?><br>
                    <Strong class="col-md-2">Sex</Strong><p class="col-md-6"></p><?php echo $profile['sex'];?><br>
                    <Strong class="col-md-2">Age</Strong><p class="col-md-6"></p><?php #echo $profile['age'];?><br>
                    <Strong class="col-md-2">Location</Strong><p class="col-md-6"><?php echo $profile['region'];?></p><br>
                    <Strong class="col-md-2">Address</Strong><p class="col-md-6"><?php echo $profile['address'];?></p><br><br>
                    <Strong class="col-md-">Work place</Strong><br><button class="btn btn-info">Read more</button>
                  <?php } ?>
    </div> 
  </div>  -->
  <div class="call">
    <div class="row col-md-12">
      <div class="col-md-6"><span></span><a href="" class="btn btn-success btn-bg btn-block">call</a></div>
      <div class="col-md-6"><a href="" class="btn btn-success btn-bg btn-block">Review</a></div>

    </div>
  </div>
  <div class="address">
    <div class="row col-md-12">
    <?php foreach($prof as $profile){?>
                    <Strong class="col-md-2">Address</Strong><p class="col-md-4"><?php echo $profile['address'];?></p><br><br>
                    <Strong class="col-md-2">Work place</Strong><br>
                    <!-- <div class="form-group">
                        <div class="col-md-2"><Strong>About me</Strong></div>
                        <div class="col-md-10">
                          mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="form-group">                         
                          <div class="col-md-6">
                            <h3>Services offered</h3>
                            <div class="list-group">
                              <?php foreach($services as $service){?>
                                <button class="list-group"><?php echo $service['service_name'];?> </button>
                              <?php }?>
                            </div>

                          </div>
                        </div>
                        <div class="form-group">                          
                          <div class="col-md-6">
                          <h3>Conditions</h3>
                            mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">                         
                          <div class="col-md-6">
                          <h3>Board of certification</h3>
                            mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                          </div>
                        </div>
                        <div class="form-group">                          
                          <div class="col-md-6">
                          <h3>Patient Testmonial</h3>
                            mdl  kkvf keek k ke ek kek ke kekrkekek ke epk rio3m ekk erk oer kekf w wp rkkwep
                          </div>
                        </div>
                    </div>
                  <?php } ?>
                  <div class="row col-md-12">
                    <h4>Education</h4>
                    <div class="col-md-4">Oleval</div>
                    <div class="col-md-4">A level</div>
                    <div class="col-md-4">Univesity</div>
                  </div>
                  <div class="row col-md-12">
                    <h4>Dr.reviews</h4>
                    <div class="com-md-12">
                      reviews are here****
                    </div>
                  </div>
    </div>
  </div>
</div>