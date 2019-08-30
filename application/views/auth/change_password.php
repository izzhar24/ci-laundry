<div class="card">
    <div class="card-header">
        <div class="card-title">
            <?= lang('change_password_heading'); ?>
        </div>
    </div>
    <div class="card-body">

        <?php
            if ($message) {
                  ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert" id="infoMessage">
            <strong><?php echo $message; ?></strong>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php

            }
            ?>
        <?php echo form_open("change_password"); ?>
        <p>
            <?php echo lang('change_password_old_password_label', 'ld_password'); ?> <br />
            <?php echo form_input($old_password); ?>
        </p>

        <p>
            <label
                for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length); ?></label>
            <br />
            <?php echo form_input($new_password); ?>
        </p>

        <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
            <?php echo form_input($new_password_confirm); ?>
        </p>
    </div>
    <div class="card-footer">
        <?php echo form_input($user_id); ?>
        <button class="btn btn-sm btn-primary" type="submit">
            <i class="fa fa-dot-circle-o"></i> Submit</button>
        <button class="btn btn-sm btn-danger" type="button" onclick="javascript:history.back()">
            <i class="fa fa-ban"></i> Cancel</button>
        <?php echo form_close(); ?>

    </div>
</div>