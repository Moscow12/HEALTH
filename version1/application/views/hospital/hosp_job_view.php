<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanza Health| Job</title>
    
</head>
<body>
    <div class="row col-md-12">
        <div id="job">
            <div class="card">
                <div class="card-header"><?php echo $title; ?></div>
                <div class="card-body">
                    <table>
                        <tr>
                        <thead>
                         <th>#</th>
                            <th>Job Title</th>
                            <th>Job Function</th>
                            <th>Job Location</th>
                            <th>Description</th>
                        </thead>
                           
                        </tr>
                        <tbody>
                            <?php $numb= 1; foreach($job as $jobs){?>
                            <th><?php echo $numb++; ?></th>
                            <td><?php echo $jobs['title']; ?></td>
                            <td><?php echo $jobs['job_function']; ?></td>
                            <td><?php echo $jobs['jlocation']; ?></td>
                            <td><a href="view_job1_desc" class="btn btn-info">View</a></td>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>