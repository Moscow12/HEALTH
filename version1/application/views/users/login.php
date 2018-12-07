<?php if($this->session->flashdata('restration')):  ?>    
                <?php echo '<p class="alert alert-success" align="center">'.$this->session->flashdata('restration'). '</p>'; ?>
            <?php endif; ?>

<section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                  <h2 class="h-ultra">TANZA Health medical group</h2>
                </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-cog fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                    <li><span class="fa fa-cog fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                    <li><span class="fa fa-cog fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                  </ul>

                </div>
              </div>

<!-- <div class="col-sm-6 col-md-4 col-lg-3">
 -->            </div>
            <?php echo form_open('Users/login'); ?>
            <div class="col-lg-6">
              <div class="form-wrapper">
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                  <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> <?php echo $title; ?> <small>(It's free!)</small></h3>
                    </div>
                    <div class="form-group" style="color: red;"> <?php echo validation_errors(); ?></div>
                    <div class="panel-body">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage" class="form-group" style="color: red;">
                        </div>

<!--                       <form action="" method="post" role="form" class="contactForm lead">
 -->                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <label>Email Address</label>
                              <input type="text" name="email" id="first_name" class="form-control input-md" data-rule="minlen:3" autofocus data-msg="Please enter at least 3 chars" autofocus="requied">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <!-- <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="text" name="email" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                              <div class="validation"></div>
                            </div>
                          </div> -->
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" id="last_name" class="form-control input-md" data-rule="minlen:3" autofocus="required" data-msg="Please enter at least 3 chars" >
                              <div class="validation"></div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-10  offset-md-4">
                            <div class="checkbox">
                              <label>Remember Me
                              <input type="checkbox" name="" id="email"  data-rule="email" data-msg="Please enter a valid email"></label>
                              <div class="validation"></div>
                            </div>
                          </div>
                          
                        </div><br/>
			
                        <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                      
                        <?php if($this->session->flashdata('login_fail')):  ?>    
                <?php echo '<p class="lead-footer alert alert-danger" align="center">'.$this->session->flashdata('login_fail'). '</p>'; ?>
            <?php endif; ?>

                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div><?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
