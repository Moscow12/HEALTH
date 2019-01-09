
<!-- // <div class="container">
//     <section>
//         <div class="panel">
//                 <div class="row">
//             <?php foreach($jobs as $job){?>
//                 <div class="col-md-12">
//                 <div class="col-sm-6 col-md-6">
//                     <div class="col-sm-3 col-md-3">
//                     <strong>Posted by:</strong>  <?php echo $job['name']; ?>br
//                         <strong>Job Title:</strong>  <?php echo $job['title']; ?>
//                     </div>
//                     <div class="col-sm-3 col-md-3">
//                     <strong>Location: </strong>  <?php echo $job['jlocation']; ?>
//                     </div>
//                 </div>
//                 <div class="col-sm-6 col-md-6">
//                     <div class="col-sm-3 col-md-3">
//                     Job function: <?php echo $job['job_function']; ?>
//                     </div>
//                     <div class="col-sm-3 col-md-3">
//                     salary  <?php echo $job['salary']; ?>
//                     </div>
//                 </div><a href="jobs" class="btn btn-info">view Job</a>
//                 </div>
            
//             <?php }?>
//         </div>
//         </div>
  
// </section>
// </div> -->

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Jobs | Advertises</title>
     
  </head>
  <body>

    <br><br><br><br><br><br>

      <!-- Example DataTables Card-->
      <div class="container">
            <div class="panel mb-3">
            <div class="panel-header">
            <i class="fa fa-table"></i><?php echo $title; ?></div>
            <div class="panel-body"> 
            <div class="table-responsive" id="attendance">
                <table class="table table-striped table-hover " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Job Title</th>
                    <th>Posted By</th>
                    <th>Location</th>
                    <th>Job function</th>
                    <th>Sarary</th>                  
                    <th>Descriptions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Job Title</th>
                    <th>Posted By</th>
                    <th>Location</th>
                    <th>Job function</th>
                    <th>Sarary</th>                  
                    <th>Descriptions</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach($jobs as $job){?>
                    <tr>
                        <td><?php echo $job['title'] ?></td>
                        <td><?php echo $job['name']; ?></td>
                        <td><?php echo $job['jlocation']; ?></td>
                        <td><?php echo $job['job_function']; ?></td>
                        <td><?php echo $job['salary']; ?></td>                    
                        <td> <a href="jobs" class="btn btn-primary">View </a></td>
                    </tr>
                <?php }?>
                </tbody>
                </table>
                </table>

            </div>
            </div>
            <div class="panel-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
        </div>   
      </div>
     
    </div>
  </body>
</html>


