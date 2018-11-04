<section>
<div class="container">
    <div class="row">
        <div class="panel">
            <div class="panel-body">
                <div class="panel-header"><?php echo $title; ?></div>
                <p>These are he articles Written by our proffesional doctors and specialist with health issues<br> Learn with us.</p>
                 <ul class="list-unstyled">
                <?php    foreach($hospitals as $hospital){?>
                    <li class="media">
                        <img src="<?=base_url();?>assets/img/dummy/me.png" alt="" class="mt-0 mb-1">
                        <div class="media-body">
                            <h5><li><?php  echo $hospital['name'];?></li></h5>
                            <p><?php echo $hospital['email'];?> </p> 
                           
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            
        </div>
    </div>
</div>
</section>