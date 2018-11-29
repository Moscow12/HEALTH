   <!-- Section: team -->
   <section id="doctor" class="home-section bg-gray paddingbot-20">
      <div class="container marginbot-10">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Doctors</h2>
                <p>Meet our proffetional doctors here and get in touch with them.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container"> 
            <div class="row">
                <div class="col-md-12">
                    
                        <?php foreach($doctor as $doctors){?>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <a href="<?=base_url();?>assets/img/dummy/img-1.png"><img src="<?=base_url();?>assets/img/dummy/img-1.png" alt=""></a>
                                    <div class="caption">
                                       <strong>Name:</strong> <?php echo $doctors['name'];?><br>
                                        <strong>Professional:</strong> <?php echo $doctors['professional'];?><br>
                                        <!-- Email:<?php echo $doctors['email'];?><br> -->
                                       <!-- <strong>Phone #:</strong>  <?php echo $doctors['phone'];?><br>--><a href="<?=base_url();?>index.php/Tanza/dr_profile/<?php echo $doctors['id'];?>"class="btn btn-info">View profile</a> 
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                        <?php }?>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                     <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link"><span class="page-link">1 <span class="sr-only">(current)</span></span></a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">Next</a></li>
                            </ul>
                    </nav>
                </div>                
            </div>
          </div>
        </div>
      </div>
    </section>