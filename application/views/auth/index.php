<div class="card">
    <div class="card-header">
        <div class="card-title">
            Data users
        </div>
    </div>
    <div class="card-body">

        <?php
        if ($message) {
            ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="infoMessage">
            <strong><?php echo $message; ?></strong>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php

        }
        ?>
        <table class="table table-sm table-hovered">
            <thead>
                <tr>
                    <th><?php echo lang('index_fname_th'); ?></th>
                    <th><?php echo lang('index_lname_th'); ?></th>
                    <th><?php echo lang('index_email_th'); ?></th>
                    <th><?php echo lang('index_groups_th'); ?></th>
                    <th><?php echo lang('index_status_th'); ?></th>
                    <th><?php echo lang('index_action_th'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php foreach ($user->groups as $group) : ?>
                        <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
                        <?php endforeach ?>
                    </td>
                    <td>
                        <?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="<?= base_url('auth/edit_user/') . $user->id ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a class="btn btn-sm btn-primary" href="<?= base_url('auth/create_user') ?>">
            <i class="fa fa-dot-circle-o"></i> Create a new user</a>
        <a class="btn btn-sm btn-primary" href="<?= base_url('auth/create_group') ?>">
            <i class="fa fa-dot-circle-o"></i>
            Create a new group</a>
    </div>
</div>