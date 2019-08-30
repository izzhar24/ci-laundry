<div class="card">
      <div class="card-header">
            <div class="card-title">
                  Create Group
            </div>
      </div>
      <form action="<?= base_url('auth/create_group') ?>" method="post">
            <div class="card-body">
                  <?php
                  if ($message) {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="infoMessage">
                              <strong><?php echo $message; ?></strong>
                              <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                              </button>
                        </div>
                  <?php

                  }
                  ?>
                  <p><?php echo lang('create_group_subheading'); ?></p>
                  <div class="form-group">
                        <?php echo lang('create_group_name_label', 'group_name'); ?> <br />
                        <?php echo form_input($group_name); ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_group_desc_label', 'description'); ?> <br />
                        <?php echo form_input($description); ?>
                  </div>
            </div>
            <div class="card-footer">
                  <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>
                  <button class="btn btn-sm btn-danger" type="button" onclick="javascript:history.back()">
                        <i class="fa fa-ban"></i> Cancel</button>
            </div>
      </form>
</div>