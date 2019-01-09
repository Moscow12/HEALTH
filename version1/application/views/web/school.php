<!-- <div class="container"><?php echo $title;?>
    <ul class="list-unstyled">
        <li class="media">
            <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </li>
        <li class="media my-4">
            <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </li>
        <li class="media">
            <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </li>
    </ul>
</div> -->

<section>
<div class="container">
    <div class="row">
    <br><br><br><br><br>
        <div class="panel" style="background: red;">
            <div class="panel-body" >
                <div class="panel-header header-center"  align="center"><?php echo $title; ?></div><hr>
                 <ul class="list-unstyled" >
                <?php    foreach($schools as $school){?>
                    <li class="media" >
                        <img src="<?=base_url();?>assets/img/dummy/me.png" alt="" class="thumbnails">
                        <div class="media-body">
                            <h5><li><?php  echo $school['name'];?></li></h5>
                            <p><?php echo $school['email'];?><a href="hospital" class="btn btn-success">Read more</a> </p>                                                      
                        </div>
                        <hr>
                    </li>
                    <?php }?>
                </ul>
            </div>
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
</section>
