
<div class="container">
    <div class="card" style="background: red;">
        <div class="card-header"><?php echo $title;?></div>
        <div class="card-body">
            <?php foreach($job as $jb){?>
            <div class="row col-md-12">
                <div class="col-md-3">JOB TITLE</div>
                <div class="col-md-9"><?php echo $jb['discription'];?></div>

            </div>

            <?php }?>
        </div>
    </div>
</div>
