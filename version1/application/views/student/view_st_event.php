<?php if($this->session->flashdata('student_events')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('student_events'). '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('event_deleted')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('event_deleted'). '</p>'; ?>
<?php endif; ?>


<div class="row"><div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card card-header"><?php echo $title; ?></div>
            <div class="card card-body">
                <table class="table-striped  ">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Event Description</th>
                    <th>Picture</th>
                    <th>Date</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $namb=1; foreach($events as $serv){?>
                    <tr>
                        <th><?php echo $namb++; ?></th>
                        <td><?php echo $serv['title'];?> </td>
                        <td><?php echo $serv['location'];?> </td>
                        <td><?php echo $serv['description']; ?> </td>
                        <td><?php echo $serv['photo'];?> </td>
                        <td><?php echo $serv['date'];?></td>
                        <td>
                            <span><a href="edit_event/<?php echo $serv['id']; ?>" ><button class="btn btn-info" value="<?php echo $serv['id']; ?>">Edit</button></a>
                            <a href="delete_evt/<?php echo $serv['id']; ?>" ><button type="reset" class="btn btn-danger" value="<?php echo $serv['id']; ?>">Delete</button></a></span>
                        </td>
                       
                    </tr>
                    <?php }?>
                </tbody>
                </table>
            </div>
        </div><a href="event" class="btn btn-info">Post event</a>
        <div class="col-md-1"></div>
    </div>
</div>
