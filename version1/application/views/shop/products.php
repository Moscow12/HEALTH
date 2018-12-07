<div class="row">
<?php if($this->session->flashdata('product_deleted')):  ?>    
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_deleted'). '</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('product_updated')):  ?>    
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_updated'). '</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('product_added')):  ?>    
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_added'). '</p>'; ?>
                <?php endif; ?>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="card card-primary">
            <div class="card-header"><?php echo $title;?></div>
            <div class="card-body">
               
                 <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <th>#</th>
                        <th>Item</th>
                        <th>Measurements</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $namb= 1; 
                       
                        foreach($product as $products){
                            $quantity = $products['quantity'];
                            $price = $products['price'];
                            $amount = $quantity * $price;
                            ?>
                        <tr>
                            <td><?php echo $namb++; ?></td>
                            <td><?php echo $products['item'];?></td>
                            <td><?php echo $products['measuments'];?> </td>
                            <td><?php echo $products['quantity'];?></td>
                            <td><?php echo $products['price'];?></td>
                            <td><?php echo $amount;?></td>
                            <td><span><a href="Edit_product/<?php echo $products['id'];?>" class="btn btn-primary">Edit</a><a href="delete_product/<?php echo $products['id'];?>" class="btn btn-danger">delete</a></span></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <div><a href="register_product" class="btn btn-primary">Add More product</a></div>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>

</div>
