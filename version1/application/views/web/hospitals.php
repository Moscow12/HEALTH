<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospitals</title>

   
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
            <br><br><br><br><br><br>
                <div class="panel" >
                <div class="panel-header header-center"><h3><?php echo $title; ?></h3></div>
                    <div class="panel-body" >
                            <?php    foreach($hospitals as $hospital){?>
                                    <div class="thumbnail col-md-12">
                                        <div class="col-md-4">
                                            <a href="<?=base_url();?>assets/img/dummy/img-1.png"><img src="<?=base_url();?>assets/img/dummy/img-1.png" alt=""></a>
                                        </div>                        
                                        <div class="col-md-4" id="caption1">
                                            <div class="caption">
                                                Caption name:<?php echo $hospital['name'];?><br>
                                                Email:<?php echo $hospital['email'];?><br>
                                                <p><a href="hospital_prof/<?php echo $hospital['id'];?>" class="btn btn-success">Read more</a> </p> 
                                            </div>  
                                        </div> 
                                        <div class="col-md-4"  id="caption2">
                                            I will put another thing here remind me when u see it <span class="blick"><a href="" class="btn btn-info">Contact me</a></span>
                                        </div> 
                                    </div>                                                                                
                                
                            <?php }?><hr>
                    </div>
                    <div class="row" id="right">
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
</body>
</html>

