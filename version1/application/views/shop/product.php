<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card card-secondary">
            <div class="card-header"><?php echo $title;?></div>
            <div class="card-body">
                <div  style="color: red; background: #dc3;">
                    <?php echo validation_errors(); ?>
                </div>
               <form method="post" action="<?php echo base_url();?>index.php/Shop/register_product" enctype="multipart/form-data">
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Item:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="item" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Measurements:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="measuments">
                        </div>
                    </div>
                
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Quantity:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" name="quantity">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Price@</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="price">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Product Photo</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="picture">
                        </div>
                    </div>
                   
             <div class="form-group row col-sm-12">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                    <button class="btn btn-primary">Submit</button>
                    </div>
            </div>      
                    
            </div>
            
        </div>
    </div>
    <div class="col-sm-2"></div>

</div>
