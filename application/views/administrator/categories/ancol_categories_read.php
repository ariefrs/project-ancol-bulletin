<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Detail Ancol_categories </h2>
        <table class="table">
	    <tr><td>Parent Id</td><td><?php echo $parent_id; ?></td></tr>
	    <tr><td>Title</td><td><?php echo $title; ?></td></tr>
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Alias</td><td><?php echo $alias; ?></td></tr>
	    <tr><td>Image</td><td><?php echo $image; ?></td></tr>
	    <tr><td>Section</td><td><?php echo $section; ?></td></tr>
	    <tr><td>Image Position</td><td><?php echo $image_position; ?></td></tr>
	    <tr><td>Description</td><td><?php echo $description; ?></td></tr>
	    <tr><td>Published</td><td><?php echo $published; ?></td></tr>
	    <tr><td>Checked Out</td><td><?php echo $checked_out; ?></td></tr>
	    <tr><td>Checked Out Time</td><td><?php echo $checked_out_time; ?></td></tr>
	    <tr><td>Editor</td><td><?php echo $editor; ?></td></tr>
	    <tr><td>Ordering</td><td><?php echo $ordering; ?></td></tr>
	    <tr><td>Access</td><td><?php echo $access; ?></td></tr>
	    <tr><td>Count</td><td><?php echo $count; ?></td></tr>
	    <tr><td>Params</td><td><?php echo $params; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('categories') ?>" class="btn btn-danger">Cancel</a></td></tr>
	</table>
        </body>
</html>