<div class="card">
      <div class="card-header">
            <div class="card-title">
                  <?php echo lang('create_user_heading'); ?>
            </div>
      </div>
      <form action="<?= base_url('auth/create_user') ?>" method="post">
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
                        <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                        <?php echo form_input($first_name); ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                        <?php echo form_input($last_name); ?>
                  </div>
                  <div class="form-group">
                        <?php
                        if ($identity_column !== 'email') {
                              echo '<p>';
                              echo lang('create_user_identity_label', 'identity');
                              echo '<br />';
                              echo form_error('identity');
                              echo form_input($identity);
                              echo '</p>';
                        }
                        ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_user_company_label', 'company'); ?> <br />
                        <?php echo form_input($company); ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_user_email_label', 'email'); ?> <br />
                        <?php echo form_input($email); ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                        <?php echo form_input($phone); ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_user_password_label', 'password'); ?> <br />
                        <?php echo form_input($password); ?>
                  </div>
                  <div class="form-group">
                        <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                        <?php echo form_input($password_confirm); ?>
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