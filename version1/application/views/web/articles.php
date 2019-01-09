<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanza Health</title>
    <style>
        #article{
            background-color: #c2c3e1;
        }
    </style>
</head>
<body>
<br><br><br><br><br>
<br>
<div class="container" id="article">
    <div class="row">
        <div class="col-md-12">
                <h3><?php echo $title; ?></h3><hr>
                <p>These are the articles Written by our proffesional doctors and specialists consern with health issues, Learn with us.</p>
                <hr>
                 <ul class="list-unstyled">
                <?php    foreach($articles as $article){?>
                    <li class="thumbnail">
                        <div class="caption">
                            <h5><li><?php  echo $article['title'];?></li></h5>
                            <p><?php echo $article['description'];?> </p>
                            <div class="col-md-4">
                                Posted by: <?php echo $article['name'];?>                                
                            </div>
                            <div class="col-md-40   offset-md-4">
                                Posted on: <?php echo $article['date'];?><span><i>Good</i></span>
                             </div>
                             <!-- <div class="col-md-65 offset-md-4">
                                 like: <span><i>Good</i></span>
                             </div> -->
                        </div>
                    </li>
                    <?php }?>
                </ul>
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

</body>
</html>
