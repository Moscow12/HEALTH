<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="panel">
            <div class="panel-body">
                <div class="panel-header"><?php echo $title; ?></div>
                <p>These are he articles Written by our proffesional doctors and specialist with health issues<br> Learn with us.</p>
                 <ul class="list-unstyled">
                <?php    foreach($articles as $article){?>
                    <li class="media">
                        <img src="<?=base_url();?>assets/img/dummy/me.png" alt="" class="mt-0 mb-1">
                        <div class="media-body">
                            <h5><li><?php  echo $article['title'];?></li></h5>
                            <p><?php echo $article['description'];?> </p>
                            <div class="col-md-4">
                                Posted by: <?php echo $article['name'];?>                                
                            </div>
                            <div class="col-md-4 offset-md-4">
                                Posted on: <?php echo $article['date'];?>
                             </div>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            
        </div>
    </div>
</div>

</body>
</html>
