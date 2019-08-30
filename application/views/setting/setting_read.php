<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Setting Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Image Icon</td><td><?php echo $image_icon; ?></td></tr>
	    <tr><td>Image Display</td><td><?php echo $image_display; ?></td></tr>
	    <tr><td>Is Active</td><td><?php echo $is_active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>