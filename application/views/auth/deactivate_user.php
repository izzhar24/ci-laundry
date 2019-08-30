<div class="card">
  <div class="card-header">
    <div class="card-title">
      <?php echo lang('deactivate_heading'); ?>
    </div>
  </div>
  <div class="card-body">
    <?php echo sprintf(lang('deactivate_subheading'), $user->username); ?>

    <?php echo form_open("auth/deactivate/" . $user->id); ?>

    <p>
      <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
      <input type="radio" name="confirm" value="yes" checked="checked" />
      <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
      <input type="radio" name="confirm" value="no" />
    </p>

    <?php echo form_hidden($csrf); ?>
    <?php echo form_hidden(['id' => $user->id]); ?>
  </div>
  <div class="card-footer">
    <button class="btn btn-sm btn-primary" type="submit">
      <i class="fa fa-dot-circle-o"></i> Submit</button>
    <button class="btn btn-sm btn-danger" type="button" onclick="javascript:history.back()">
      <i class="fa fa-ban"></i> Cancel</button>
    <?php echo form_close(); ?>

  </div>
</div>

<h1></h1>
<p></p>