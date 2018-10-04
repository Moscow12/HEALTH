


    <div class="row"><div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card card-header"><?php #echo $title; ?></div>
                <div class="card card-body">
                    <table class="table-striped table-bordered ">
                    <thead>
                        <th>#</th>
                        <th>Service name</th>
                        <th>Day</th> 
                        <th>Start time</th>
                        <th> End time</th>
                    </thead>
                    <tbody>
                    <?php $namb=1; foreach($times as $tim){?>
                        <tr>
                            <th><?php echo $namb++; ?></th>
                            <td><?php echo $tim['service_name'];?> </td>
                            <td><?php echo $tim['day'];?> </td>
                            <td><?php echo $tim['start_at'];?> </td>
                            <td><?php echo $tim['end_at'];?> </td>                         
                        </tr>
                        <?php }?>
                    </tbody>
                    </table> 
                </div>
            </div><a href="service_time" class="btn btn-info">Add service time</a>
            <div class="col-md-1"></div>
        </div>
    </div>
