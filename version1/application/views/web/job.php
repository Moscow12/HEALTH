
<div class="container">
    <section>
        <div class="panel">
                <div class="row">
            <?php foreach($jobs as $job){?>
                <div class="col-md-12">
                <div class="col-sm-6 col-md-6">
                    <div class="col-sm-3 col-md-3">
                    <strong>Posted by:</strong>  <?php echo $job['name']; ?>br
                        <strong>Job Ttle:</strong>  <?php echo $job['title']; ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                    <strong>Location: </strong>  <?php echo $job['jlocation']; ?>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="col-sm-3 col-md-3">
                    Job function: <?php echo $job['job_function']; ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                    salary  <?php echo $job['salary']; ?>
                    </div>
                </div><a href="jobs" class="btn btn-info">view Job</a>
                </div>
            
            <?php }?>
        </div>
        </div>
  
</section>
</div>