<div class="card">
      <div class="card-header">
            <div class="card-title">
                  <?= lang('edit_group_heading'); ?>
            </div>
      </div>
      <div class="card-body">
            <p><?php echo lang('edit_group_subheading'); ?></p>

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

            <?php echo form_open(current_url()); ?>

            <p>
                  <?php echo lang('edit_group_name_label', 'group_name'); ?> <br />
                  <?php echo form_input($group_name); ?>
            </p>

            <p>
                  <?php echo lang('edit_group_desc_label', 'description'); ?> <br />
                  <?php echo form_input($group_description); ?>
            </p>

      </div>
      <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit">
                  <i class="fa fa-dot-circle-o"></i> Submit</button>
            <button class="btn btn-sm btn-danger" type="button" onclick="javascript:history.back()">
                  <i class="fa fa-ban"></i> Cancel</button>
            <?php echo form_close(); ?>

      </div>
</div>