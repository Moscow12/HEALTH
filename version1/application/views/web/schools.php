<section>
<div class="container">
    <div class="row">
        <div class="panel">
            <div class="panel-body">
                <div class="panel-header"><?php echo $title; ?></div>
                <p>These are schools that offers medical certification<br> Learn with us.</p>
                 <ul class="list-unstyled">
                <?php    foreach($schools as $school){?>
                    <li class="media">
                        <img src="<?=base_url();?>assets/img/dummy/me.png" alt="" class="mt-0 mb-1">
                        <div class="media-body">
                            <h5><li><?php  echo $school['name'];?></li></h5>
                            <p><?php echo $school['email'];?> </p> 
                           
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            
        </div>
    </div>
</div>
</section>