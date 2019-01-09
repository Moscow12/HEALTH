<section>
<div class="container">
    <div class="row">
    <br><br><br><br><br><br><br>
        <div class="panel" >
        <div class="panel-header header-center"><h3><?php echo $title; ?></h3></div>

            <div class="panel-body" >
                
                <div class="row">
                <?php foreach($products as $product){?>
                  <div class="col-md-4">
                    <img src="<?=base_url();?>assets/img/team/1.jpg" width="200px" height="200px" alt="" class="img-responsive">
                </div>
           
                <div class="col-md-4">
                    Product name: <?php echo $product['item'];?> <br>
                    Quantity Available: <?php echo $product['quantity'];?><span><?php echo $product['measuments'];?></span> <br> 
                    Price <span>@</span>: <?php echo $product['price'];?> <br>                 
                    Location available: <?php #echo $product['address'];?><br>
                    Contacts details:<?php #Secho $product['shop_phone'];?> <br>
                    <span></span>
                </div>
                <div class="col-md-4">
                    Email supplier: <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                </span>
                    Call supplier: <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span>
                </div>
                 
                </div> 
                <hr> <?php } ?>    
                <div class="row" align="right">
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
        
    </div>
   
</div>
</section>