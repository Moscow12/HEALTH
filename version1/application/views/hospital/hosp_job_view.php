<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanza Health| Job</title>
    
</head>
<body>
    <section >
    <table style="background:#cc4; width:80%; align:center; border-radius:10%;">
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
                            <tr>
                                <th><?php echo $numb++; ?></th>
                                <td><?php echo $jobs['title']; ?></td>
                                <td><?php echo $jobs['job_function']; ?></td>
                                <td><?php echo $jobs['jlocation']; ?></td>
                                <td><span><a href="view_job1_desc/<?php echo $jobs['id']; ?>" class="btn btn-info" value="<?php echo $jobs['id']; ?>"><i class="glyphicon eye-open">View</i> </a></span> </td>
                            </tr>
                            
                            <?php }?>
                        </tbody>
                    </table>
                    <a href="job" class="btn btn-secondary">Advertirse more Jobs</a>
                    </section>
    
    
</body>
</html>