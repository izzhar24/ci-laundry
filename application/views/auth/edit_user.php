<div class="card">
      <div class="card-header">
            <div class="card-title">
                  <?= lang('edit_user_heading') ?>
            </div>
      </div>
      <div class="card-body">
            <?= lang('edit_user_subheading') ?>
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

            <?php echo form_open(uri_string()); ?>

            <p>
                  <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />
                  <?php echo form_input($first_name); ?>
            </p>

            <p>
                  <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
                  <?php echo form_input($last_name); ?>
            </p>

            <p>
                  <?php echo lang('edit_user_company_label', 'company'); ?> <br />
                  <?php echo form_input($company); ?>
            </p>

            <p>
                  <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
                  <?php echo form_input($phone); ?>
            </p>

            <p>
                  <?php echo lang('edit_user_password_label', 'password'); ?> <br />
                  <?php echo form_input($password); ?>
            </p>

            <p>
                  <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?><br />
                  <?php echo form_input($password_confirm); ?>
            </p>

            <?php if ($this->ion_auth->is_admin()) : ?>

                  <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                  <?php foreach ($groups as $group) : ?>
                        <label class="checkbox">
                              <?php
                              $gID = $group['id'];
                              $checked = null;
                              $item = null;
                              foreach ($currentGroups as $grp) {
                                    if ($gID == $grp->id) {
                                          $checked = ' checked="checked"';
                                          break;
                                    }
                              }
                              ?>
                              <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                              <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                        </label>
                  <?php endforeach ?>

            <?php endif ?>

            <?php echo form_hidden('id', $user->id); ?>
            <?php echo form_hidden($csrf); ?>

      </div>
      <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit">
                  <i class="fa fa-dot-circle-o"></i> Submit</button>
            <button class="btn btn-sm btn-danger" type="button" onclick="javascript:history.back()">
                  <i class="fa fa-ban"></i> Cancel</button>
            <?php echo form_close(); ?>
      </div>
</div>