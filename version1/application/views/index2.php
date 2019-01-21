<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TANZA Health</title>

  <!-- css -->
  
  <link href="<?=base_url();?>assets/css/bootstrap.mine.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="<?=base_url();?>assets/stylesheet" type="text/css" href="<?=base_url();?>assets/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?=base_url();?>assets/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url();?>assets/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?=base_url();?>assets/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/css/mine.css" rel="stylesheet" >
  <link href="<?=base_url();?>star/css/mine.css" rel="stylesheet" >



  <!-- boxed bg -->
  <link id="bodybg" href="<?=base_url();?>assets/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?=base_url();?>assets/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style>
    #cup{
      background-color: white;
      
    }
    #cups{
      border: solid 1px;
      border-style: ridge;
    }
    #table{
      border: solid 1px;
      border-style: round;
      border-radius: 3px; 
    }
  </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="background-color:blue;">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xsl-3 col-sm-3 col-md-3">
                  <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                </div>
                <div class="col-xsl-3 col-sm-3 col-md-3">
                  <a href="<?=base_url();?>index.php/Tanza/appointment" class="btn btn-skin btn-md">Make an Appointment</a>
                </div>
                <div class="col-xsl-3 col-sm-3 col-md-3">
                  <span><a href="<?=base_url();?>index.php/Users/login" data-toggle="modal2" data-target="#Login" class="btn btn-skin btn-sm" style="color: red">Login</a><a href="<?=base_url();?>index.php/Users/registration" class="btn btn-skin btn-sm">register</a></span>
                </div>
                <div class="col-xsl-3 col-sm-3 col-md-3">
                    <p class="bold text-right" href="index-form.html">Call us now +255 7542 89493</p>
                  </div>
              </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="<?=base_url();?>assets/img/logo.jpg" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="<?=base_url();?>">Home</a></li>
            <li><a href="<?=base_url();?>index.php/Tanza/doctors">Doctors</a></li>
            <li><a href="<?=base_url();?>index.php/Tanza/hospitals">Hospitals</a></li>
            <li><a href="<?=base_url();?>index.php/Tanza/shop">Medical tools</a></li>
            <li><a href="<?=base_url();?>index.php/Tanza/school">Medical schools</a></li>           
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Posts<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=base_url();?>index.php/Tanza/events">Events</a></li>
                  <li><a href="<?=base_url();?>index.php/Tanza/articles">Articles</a></li>
                  <li><a href="<?=base_url();?>index.php/Tanza/job">Job Opportunities</a></li>
                </ul>
            </li>
            <li><a href="<?=base_url();?>index.php/Tanza/contact">Contact us</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>


    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">            
              <div class="carousel-reviews broun-block">
                <div class="container">
                  <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="item active">
                        
                          <div class="col-lg-6">
                            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">TANZA Health medical group <small>VIEW OUR SERVICES</small></h2>
                            </div>
                          
                            <div class="well well-trans">
                              <div class="wow fadeInRight" data-wow-delay="0.1s">

                                <ul class="lead-list">
                                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite hospital</strong><br />On the pricing menu Choose the package you can <br/></span><span class="list"><a href="#"><u>hospital</u></a></span></li>
                                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Consern with you problem choose the doctor <br/></span></li>
                                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Medical Schools</strong><br />View various collage and institution which offer medical course </span></li>
                                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Vifaa tiba na madawa</strong><br />Chagua duka la dawa na vifaa tiba</span></li>
                                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Medical events and articles</strong><br />Medical events and article posted by proffesionals</span></li>

                                </ul>
                                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                  <a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
                                </p>
                              </div>
                            </div>


                          </div>
                          <div class="col-lg-6">
                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                              <img src="<?=base_url();?>assets/img/dummy/img-1.png" class="img-responsive" alt="" />
                            </div>
                          </div>
                        </div>                        
                        <div class="item">
                          <div class="col-md-4 col-sm-6">
                            <div class="block-text rel zmin">
                              <a title="" href="#">Birth control pills</a>
                              <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                  class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                              </div>
                              <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                              <img src="<?=base_url();?>assets/img/dummy/mesh.jpg" alt="" class="person img-circle" />
                              <a title="" href="#">Lucas Thompson</a>
                              <span>Austin, Texas</span>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="block-text rel zmin">
                              <a title="" href="#">Radiology</a>
                              <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                                <span
                                  data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                              </div>
                              <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                              <img src="<?=base_url();?>assets/img/dummy/jengo.jpg" alt="" class="person img-circle" />
                              <a title="" href="#">Millenium Tower</a>
                              <span>Fort Worth, Texas</span>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                            <div class="block-text rel zmin">
                              <a title="" href="#">Cervical Lesions</a>
                              <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                  class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                              </div>
                              <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            </div>
                            <div class="person-text rel text-light">
                              <img src="<?=base_url();?>assets/img/testimonials/6.jpg" alt="" class="person img-circle" />
                              <a title="" href="#">Suzanne Adam</a>
                              <span>Detroit, Michigan</span>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-lg-6">
                            <p class="jumbotron">
                              Get your health online in a simple way and affordable price by using our site. <br>
                               click, view, get updated with our daily news
                            </p>
                          </div>
                          <div class="col-lg-6">
                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                              <img src="<?=base_url();?>assets/img/photo/5.jpg" class="img-responsive" alt="" />
                            </div>
                          </div>
                        </div>

                      </div>

                      <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                      <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Make an appoinmente</h4>
                <p>
                  Choose the your fevoroute doctor and hospital then make an appoinment, that for for you to meet our doctor 
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Choose your package</h4>
                <p>
                  Choose the package that can be easy for you to afford according to your needs, you can consult the doctor for your package
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Help by specialist</h4>
                <p>
                  Choose any specialist from the list that may help you according to your concern. Here is the help.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Get diagnostic report</h4>
                <p>
                  Look for your diagnostic report from the doctor after testing, Note your result is confidential.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-20">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 ">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-sm-8 col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>In an emergency? Need help now?</h3>
                      <p>If you have any emergamce case call or make an appointment with the doctor or speciatialist who can help you on your emergance cases. </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="<?=base_url();?>index.php/Tanza/appointment" class="btn btn-skin btn-lg">Book an appoinment</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--section hospital and services-->
<section id="hospital" style="background-color: antiquewhite;">
  <div class="container  margintop-10">
    <div class="row col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-8 col-md-8">
          <h4>Welcome to Tanza Health Group</h4>
          <p>These are hospitals that are available to our system which provides the prenty services.</p>
          <?php foreach($hospitals as $hospital){?>
          <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="<?=base_url();?>assets/img/photo/5.jpg" alt="" sizes="200px"  class="person img-square">
              <div class="caption">
                <?php echo $hospital['name'];?> <br>
                <p>Get being served by our proffetiional doctors from our hospital you can visit our hospital or make an appointments 
                  <br><small class="btn btn-info">read more</small>
                </p>
              </div>
            </div>
          </div>
          <?php }?>
         </div>
        
        <div class="col-sm-4 col-md-4">
          <h4>Service offered</h4><p>view more</p><?php foreach($services as $service){?>
            
          <div class="jumbotrons">
              <div class="service-icon">
                  <span class="fa fa-stethoscope fa-1x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light"><?php echo $service['service_name'];?></h5>
                  <p>Check your general body checkup.</p>
              </div>
          </div><?php }?>
          <!-- <div class="jumbotron">
              <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Medical checkup</h5>
                  <p>Check your general body checkup.</p>
              </div>
          </div> -->
        </div>
    </div>
  </div>   
</section>

  <!--section general all web content-->
    <section id="cup">
      <div class="container">
        <div class="row" id="cups">
          <div class="col-sm-4 col-md-4">
            <div class="table-responsible " id="table">
              <table class="table table-striped table-hover " >
                <tbody>
                  <tr>
                    <td><span class="fa fa-stethoscope fa-1x"></span><a href="">Events<span align="right" class="glyphicon glyphicon-chevron-right"></span></a> </td>
                  </tr>
                  <tr class="info">
                    <td><span class="fa fa-envelop-o fa-1x"></span><a href="#">Jobs optunity<span class="glyphicon glyphicon-chevron-right"></span></a> </td>
                  </tr>
                  <tr>
                    <td>Articles</td>
                  </tr>
                  <tr>
                     <td>Hospitals</td>
                  </tr>
                  <tr>
                      <td>Phamarcy</td>
                  </tr>
                  <tr>
                    <td>Medical schools</td>
                  </tr>
                  <tr>
                    <td>Medical schools</td>
                  </tr>
                  <tr>
                    <td>Services</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <div id="content">
              
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--section general all web content-->

    
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
                <div class="col-sm-12 col-md-12">                    
                        <?php foreach($doctor as $doctors){?>
                            <div class="col-sm-3 col-md-3">
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
                <div class="col-sm-4 col-md-4 offset-md-4">
                     <nav>
                            <ul class="pagination justify-content-end">
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
    <!-- end Section: doctors -->

    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">
      <div class="row">
          <div class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Services</h2>
                <p>Review our service given by our Medical students, Doctors and hospitals in different areas.</p>
              </div>
            </div>
            <div id="short" class="divider-short"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <!-- <img src="<?=base_url();?>assets/img/dummy/img-1.jpg" class="img-responsive" alt="" /> -->
              <?php foreach($services as $service){?>
                <div class="table">
                  <div class="table-item-list">
                  <strong><?php echo $service['service_name'];?></strong><br>
                  <!-- <a href="#" data-toggle="popover" id="service" data-content="<?php echo $service['description'];?>" title="<?php echo $service['service_name']; ?>" >View Description</a> -->
                  <?php echo $service['description'];?>

                    
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Medical checkup</h5>
                  <p>Check your general body checkup.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-wheelchair fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Nursing Services</h5>
                  <p>View our nursing service in every place you are.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-plus-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Pharmacy</h5>
                  <p>Visit pharmacy with different medicines and medical tools <small><a href="pharmacy">Pharmacy</a></small></p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-h-square fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Gyn Care</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-filter fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Neurology</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-user-md fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Sleep Center</h5>
                  <p>Vestibulum tincidunt enim in pharetra malesuada.</p>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->
  
  <!--fieldset galley-->
    <section>
      <div class="container">
        <div class="row">
          <fieldset class="col-md-12">
            <legend>GALLEY</legend>
            <div class="col-md-3">
              <div class="thumbnail">
                <img src="<?=base_url();?>assets/img/photo/2.jpg" alt="" class="thambnail img-square">
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img src="<?=base_url();?>assets/img/photo/2.jpg" alt="" class="thambnail img-square">
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img src="<?=base_url();?>assets/img/photo/2.jpg" alt="" class="thambnail img-square">
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img src="<?=base_url();?>assets/img/photo/2.jpg" alt="" class="thambnail img-square">
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </section>
  <!--fieldsetgallarey-->



    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Contact us</h2>
                <!-- <p>Look for our facilities used to give the services</p> -->
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
              <div class="container" style="background-color: #da4;">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="col-sm-6 col-md-6 col-lg-6"style="background-color: #bc4;">
                            <h4>If you have any query don't hustate to ask. Contact with us via.</h4>
                            <div class="unstyled-list">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                          <div class="widget">                
                            <ul>
                                <li>
                                    <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x"></i>
                          <i class="fa fa-location-arrow fa-stack-1x fa-inverse"></i>
                                    </span> Address: Buni innovation Hub.
                                </li>
                              <li>
                                    <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span> Phone: +255 754289003
                              </li>
                              <li>
                                    <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x"></i>
                          <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                        </span> Email: tanzahealth@gmail.com
                              </li>
                              <li>
                                    <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x"></i>
                          <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                        </span> Fax: 222(255) 754289003.
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                        
                            <div class="col-sm-6 col-md-6 col-lg-6" ><?php echo form_open('Tanza/contact'); ?>                
                                <h4><?php echo $title;?></h4>
                                <p>Let us know your objections and general view from our site performances, <br> contents outlooks, doctors perfoance form our site 
                                and any othe query if is there  fill the boxes bellow don't fear it's confidential.</p>
                                <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div style="color:red;"><?php echo validation_errors(); ?></div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">                   
                                            <input type="text" class="form-control" name="name" placeholder="Enter Your Full name">
                                        </div>                       
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">                   
                                            <input type="email" class="form-control" name="email" placeholder="Enter Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">                   
                                            <input type="text" class="form-control" name="subject" placeholder="Enter subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">                   
                                            <input type="tel" class="form-control" name="phone" placeholder="Enter Your phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">  
                                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Enter your message"></textarea>                 
                                        </div>
                                    </div>                    
                                </div>                    
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-offset-3">
                                        <button class="btn btn-info" value="submit">Send Message</button>
                                    </div> 
                                </div>                    
                            </div>  
                        </div>
                        
                    </div>
                </div>
              </div>
                <!-- <?php #foreach($events as $event){?>
                    <div class="table-list-hover">
                      <?php #echo $event['title'];?>
                    </div>
                <?#php }?> -->
                
                <!-- <div class="item"><a href="<?=base_url();?>assets/img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>assets/img/works/1@2x.jpg"><img src="<?=base_url();?>assets/img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                <div class="item"><a href="<?=base_url();?>assets/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>assets/img/works/2@2x.jpg"><img src="<?=base_url();?>assets/img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?=base_url();?>assets/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>assets/img/works/3@2x.jpg"><img src="<?=base_url();?>assets/img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?=base_url();?>assets/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>assets/img/works/4@2x.jpg"><img src="<?=base_url();?>assets/img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?=base_url();?>assets/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>assets/img/works/5@2x.jpg"><img src="<?=base_url();?>assets/img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><a href="<?=base_url();?>assets/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>assets/img/works/6@2x.jpg"><img src="<?=base_url();?>assets/img/photo/6.jpg" class="img-responsive " alt="img"></a></div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->

    <!--section about-->
    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-6">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>ABOUT US</h3>
                      <p>If you have any emergamce case call or make an appointment with the doctor or speciatialist who can help you on your emergance cases. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                  <div class="cta-text">
                    <h3>Mission</h3>
                      <p>If you have any emergamce case call or make an appointment with the doctor or speciatialist who can help you on your emergance cases. </p>

                    </div>
                    <div class="cta-text">
                    <h3>Vision</h3>
                      <p>If you have any emergamce case call or make an appointment with the doctor or speciatialist who can help you on your emergance cases. </p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!--end section about-->
    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Emergency Contraception</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Anna</a>
                      <span>Chicago, Illinois</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Orthopedic Surgery</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="<?=base_url();?>assets/img/testimonials/2.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Matthew G</a>
                      <span>San Antonio, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Medical consultation</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="<?=base_url();?>assets/img/testimonials/3.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Scarlet Smith</a>
                      <span>Dallas, Texas</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Birth control pills</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="<?=base_url();?>assets/img/testimonials/4.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Lucas Thompson</a>
                      <span>Austin, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Radiology</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                          data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="<?=base_url();?>assets/img/testimonials/5.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Ella Mentree</a>
                      <span>Fort Worth, Texas</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="block-text rel zmin">
                      <a title="" href="#">Cervical Lesions</a>
                      <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                          class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                      </div>
                      <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
                    <div class="person-text rel text-light">
                      <img src="<?=base_url();?>assets/img/testimonials/6.jpg" alt="" class="person img-circle" />
                      <a title="" href="#">Suzanne Adam</a>
                      <span>Detroit, Michigan</span>
                    </div>
                  </div>
                </div>


              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: testimonial -->


    <!-- Section: pricing -->
    <!-- <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Health packages</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2>Basic Fit 1 Package</h2>
                <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2>Golden Glow Package</h2>
                <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                  <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="pricing-content general last">
                <h2>Basic Fit 2 Package</h2>
                <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- /Section: pricing -->

    <!-- <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="<?=base_url();?>assets/img/dummy/partner-1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="<?=base_url();?>assets/img/dummy/partner-2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="<?=base_url();?>assets/img/dummy/partner-3.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="<?=base_url();?>assets/img/dummy/partner-4.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Tanza Health</h5>
                <p>
                  Tanza health connects patient, doctors, students and hospitals
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Tanza Health center</h5>
                <p>
                  Get served with Tanza health
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +255 754289493
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> tanzahealth.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>Buni innovation Hub COSTECH BUILDING</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - Tanza Health. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    Designed by <a href="#">Meshack Muganyizi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="<?=base_url();?>assets/js/mine.js"></script>
  <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url();?>assets/js/jquery.easing.min.js"></script>
  <script src="<?=base_url();?>assets/js/wow.min.js"></script>
  <script src="<?=base_url();?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?=base_url();?>assets/js/jquery.appear.js"></script>
  <script src="<?=base_url();?>assets/js/stellar.js"></script>
  <script src="<?=base_url();?>assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?=base_url();?>assets/js/nivo-lightbox.min.js"></script>
  <script src="<?=base_url();?>assets/js/custom.js"></script>

</body>

</html>
