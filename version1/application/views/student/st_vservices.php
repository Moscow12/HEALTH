<?php if($this->session->flashdata('service_added')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('service_added'). '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('service_delete')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('service_delete'). '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('updated_service')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('updated_service'). '</p>'; ?>
<?php endif; ?>


<div class="row"><div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card card-header"><?php echo $title; ?></div>
            <div class="card card-body">
                <table class="table-striped table-responsive table-bordered">
                <thead>
                    <th>#</th>
                    <th>Service name</th>
                    <th>Service Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $namb=1; foreach($Services as $serv){?>
                    <tr>
                        <th><?php echo $namb++; ?></th>
                        <td><?php echo $serv['service_name'];?> </td>
                        <td><?php echo $serv['description']; ?> </td>
                        <td>
                            <span><a href="edit_service/<?php echo $serv['id']; ?>" ><button class="btn btn-info" value="<?php echo $serv['id']; ?>">Edit</button></a>
                            <a href="delete/<?php echo $serv['id']; ?>" ><button type="reset" class="btn btn-danger" value="<?php echo $serv['id']; ?>">Delete</button></a></span>
                        </td>
                       
                    </tr>
                    <?php }?>
                </tbody>
                </table>
            </div>
        </div><a href="service" class="btn btn-info">Add Service</a>
        <div class="col-md-1"></div>
    </div>
</div>
