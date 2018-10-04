<?php if($this->session->flashdata('article_added')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('article_added'). '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('article_deleted')):  ?>    
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('article_deleted'). '</p>'; ?>
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
                    <th>Article Description</th>
                    <th>Action</th> 
                </thead>
                <tbody>
                    <?php $namb=1; foreach($varticle as $serv){?>
                    <tr>
                        <th><?php echo $namb++; ?></th>
                        <td><?php echo $serv['title'];?> </td>
                        <td><?php echo $serv['description']; ?> </td>
                        <td>
                            <span><a href="edit_article/<?php echo $serv['id']; ?>" ><button class="btn btn-info" value="<?php echo $serv['id']; ?>">Edit</button></a>
                            <a href="delete_art/<?php echo $serv['id']; ?>" ><button type="reset" class="btn btn-danger" value="<?php echo $serv['id']; ?>">Delete</button></a></span>
                        </td>
                       
                    </tr>
                    <?php }?>
                </tbody>
                </table>
            </div>
        </div><a href="article" class="btn btn-info">Add Article</a>
        <div class="col-md-1"></div>
    </div>
</div>
