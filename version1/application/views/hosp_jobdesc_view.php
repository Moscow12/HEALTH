<div class="row col-md-12">
    <fieldset>
        <?php foreach($desc as $description){?>
            <div class="form-group">
                <label for="">Job Title</label>
                <?php echo $description['title'];?>
            </div>
        <?php }?>
    </fieldset>
</div>