<div class="container">
    <div class="row"><br><br><br><br><br><br><br>
    <div class="panel panel-danger">
        <div class="panel-header"><p><?php $title;?></p></div>
        <div class="panel-body">
        <?php foreach ($service as $services){?>

        <div class="col-md-12">
            <div class="col-md-4">             
                <p><?php echo $services['name'];?></p> 
                <p><?php echo $services['address'];?></p>              
            </div>            
        </div>
        <?php } ?>
        </div>
    </div>
    </div>
</div>