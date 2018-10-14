
<div class="row"><div class="col-md-1"></div>
    <div class="col-md-10">
        <fieldset>
            <div id="title"><?php echo $title;?></div>
            <?php foreach($desc as $description){?>
                <div class="form-group">
                   <strong>Job Title:</strong>  <?php echo $description['title'];?><br/>
                </div>
                <div class="form-group">
                   <strong>Job Function:</strong>  <?php echo $description['job_function'];?><br>
                </div>
                <div class="form-group">
                  <strong>Job Type:</strong> <?php echo $description['job_type'];?><br/>
                </div>
                <div class="form-group">
                  <strong>Job Sarary:</strong> <?php echo $description['salary'];?><br/>
                </div>
                <div class="form-group">
                   <strong>Location:</strong> 
                    <?php echo $description['jlocation'];?>
                </div>
                <div class="form-group">
                   <strong>Job description:</strong> <?php echo $description['description'];?>
                </div>
                <div class="form-group">
                   <strong>Application Start:</strong>
                    <?php echo $description['batch_date'];?>              
                    
                </div>
                <div class="form-group">
                    <strong>Application End:</strong>
                    <?php echo $description['exp_date'];?>
                </div>
            <?php }?>
        </fieldset>
    </div>
    <div class="col-md-1"></div>
    
</div>