<div class="card">
    <div class="card-header">
        <div class="card-title">
            Supplier <?php echo $button ?>
        </div>
    </div>
    <div class="card-body">
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group row">
                <label class="col-2" >Nama <?php echo form_error('name') ?></label> 
                <div class="col-6">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name"
                        value="<?php echo $name; ?>" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2" >Alamat <?php echo form_error('address') ?></label> <div class="col-6">
                <input type="text" class="form-control" name="address" id="address" placeholder="Alamat"
                    value="<?php echo $address; ?>" />
            </div>
            </div>
            <div class="form-group row">
                <label class="col-2" >No Telp <?php echo form_error('telp_number') ?></label> <div class="col-6">
                <input type="text" class="form-control" name="telp_number" id="telp_number" placeholder="telp_number"
                    value="<?php echo $telp_number; ?>"> 
                    </div>
                    </div>
            <div class=" form-group row">
                <label class="col-2" >Description <?php echo form_error('description') ?></label> <div class="col-6">
                <textarea class="form-control" name="description" id="description" cols="30"
                    rows="10"><?php echo $description; ?></textarea>
            </div>
            </div>
            <div class=" form-group row">
                <label class="col-2" >Status <?php echo form_error('is_active') ?></label> 
                <div class="col-2">
                <select name="is_active" id="is_active" class="form-control">
                    <option value="">Please Select </option>
                    <option value=1 <?= $is_active ==1 ? "selected": ""; ?> >Active</option>
                    <option value=0 <?= $is_active ==0 ? "selected": ""; ?>>Inactive</option>
                </select>
            </div>
            </div>
    </div>
    <div class="card-footer">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-sm btn-primary">
            <i class="fa fa-dot-circle-o"></i>
            <?php echo $button ?></button>
        <a href="<?php echo site_url('supplier') ?>" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Cancel</a>
        </form>

    </div>
</div>