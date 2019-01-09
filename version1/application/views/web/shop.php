<section>
<div class="container">
    <div class="row">
    <br><br><br><br><br>
        <div class="panel" style="background: red;">
            <div class="panel-body" >
                <div class="panel-header header-center"  align="center"><?php echo $title; ?></div>
                 <ul class="list-unstyled" >
                <?php    foreach($shops as $shop){?>
                    <li class="media" >
                        <img src="<?=base_url();?>assets/img/dummy/me.png" alt="" class="thumbnails">
                        <div class="media-body">
                            <h5><li><?php  echo $shop['name'];?></li></h5>
                            <p><?php echo $shop['email'];?><a href="products" class="btn btn-success">Read more</a> </p>                                                      
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