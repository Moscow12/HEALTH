<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card card-secondary">
            <div class="card-header"><?php echo $title;?></div>
            <div class="card-body">
                <div  style="color: red; background: #dc3;">
                    <?php echo validation_errors(); ?>
                </div>
                <?php echo form_open('Shop/update_product'); ?>
                    <div class="form-group row col-sm-12">
                    <?php foreach($product as $products){?>
                        <input type="hidden" name="id"   value="<?php echo $products['id']; ?>">

                        <div class="col-sm-2">
                            <label for="name">Item:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="item" class="form-control" value="<?php echo $products['item']; ?>" >
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Measurements:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="measuments" value="<?php echo $products['measuments']; ?>">
                        </div>
                    </div>
                
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Quantity:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" name="quantity" value="<?php echo $products['quantity']; ?>">
                        </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <div class="col-sm-2">
                            <label for="name">Price@</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="price" value="<?php echo $products['price']; ?>">
                        </div>
                    </div>
                   
                  
                    
            </div>
            <div class="form-group row col-sm-12">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <button class="btn btn-info">Update</button>
                    </div>
            </div>
            <?php }?>
            
        </div>
    </div>
    <div class="col-sm-2"></div>

</div>
