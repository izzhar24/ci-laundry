<div class="card">
    <div class="card-header">
        <div class="card-title">
            Supplier <?php echo $button ?>
        </div>
    </div>
    <div class="card-body">
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group row">
                <label class="col-2">Nama <?php echo form_error('name') ?></label>
                <div class="col-6">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name" value="<?php echo $name; ?>" />
                </div>
            </div>
            <div class=" form-group row">
                <label class="col-2">Unit <?php echo form_error('unit') ?></label>
                <div class="col-6">
                    <input type="text" class="form-control" name="unit" id="unit" placeholder="Stock" value="<?php echo $unit; ?>" />
                </div>
            </div>
    </div>
    <div class="card-footer">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-sm btn-primary">
            <i class="fa fa-dot-circle-o"></i>
            <?php echo $button ?></button>
        <a href="<?php echo site_url('item') ?>" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Cancel</a>
        </form>

    </div>
</div>