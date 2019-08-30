<div class="card">
    <div class="card-header">
        <div class="card-title">Setting <?php echo $button ?></div>
    </div>
    <div class="card-body">

        <form action="<?php echo $action; ?>" method="post" class="form-horizontal">
            <div class="form-group row">
                <label for="varchar" class="col-sm-2">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                        value="<?php echo $name; ?>" />
                    <span> <?php echo form_error('name') ?></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="varchar" class="col-sm-2">Image Icon</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="image_icon" id="image_icon" placeholder="Image Icon"
                        value="<?php echo $image_icon; ?>" />

                    <span> <?php echo form_error('image_icon') ?></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="varchar" class="col-sm-2">Image Display </label>
                <div class="col-sm-4">

                    <input type="text" class="form-control" name="image_display" id="image_display"
                        placeholder="Image Display" value="<?php echo $image_display; ?>" />
                    <span><?php echo form_error('image_display') ?></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="int" class="col-sm-2">Is Active </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active" value="<?php echo $is_active; ?>" />
                    <span><?php echo form_error('is_active') ?></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2"></label>
                <div class="col-sm-4">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>