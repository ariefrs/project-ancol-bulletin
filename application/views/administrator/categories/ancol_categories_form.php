<!doctype html>
<html>

    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" />
    </head>

    <body>
        <h2 style="margin-top:0px">Ancol_categories <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
                <label for="int">Parent Id <?php echo form_error('parent_id') ?></label>
                <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Parent Id" value="<?php echo $parent_id; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Title <?php echo form_error('title') ?></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Name <?php echo form_error('name') ?></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Alias <?php echo form_error('alias') ?></label>
                <input type="text" class="form-control" name="alias" id="alias" placeholder="Alias" value="<?php echo $alias; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Image <?php echo form_error('image') ?></label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="<?php echo $image; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Section <?php echo form_error('section') ?></label>
                <input type="text" class="form-control" name="section" id="section" placeholder="Section" value="<?php echo $section; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Image Position <?php echo form_error('image_position') ?></label>
                <input type="text" class="form-control" name="image_position" id="image_position" placeholder="Image Position" value="<?php echo $image_position; ?>" />
            </div>
            <div class="form-group">
                <label for="description">Description <?php echo form_error('description') ?></label>
                <textarea class="form-control" rows="3" name="description" id="description" placeholder="Description"><?php echo $description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="tinyint">Published <?php echo form_error('published') ?></label>
                <input type="text" class="form-control" name="published" id="published" placeholder="Published" value="<?php echo $published; ?>" />
            </div>
            <div class="form-group">
                <label for="int">Checked Out <?php echo form_error('checked_out') ?></label>
                <input type="text" class="form-control" name="checked_out" id="checked_out" placeholder="Checked Out" value="<?php echo $checked_out; ?>" />
            </div>
            <div class="form-group">
                <label for="datetime">Checked Out Time <?php echo form_error('checked_out_time') ?></label>
                <input type="text" class="form-control" name="checked_out_time" id="checked_out_time" placeholder="Checked Out Time" value="<?php echo $checked_out_time; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Editor <?php echo form_error('editor') ?></label>
                <input type="text" class="form-control" name="editor" id="editor" placeholder="Editor" value="<?php echo $editor; ?>" />
            </div>
            <div class="form-group">
                <label for="int">Ordering <?php echo form_error('ordering') ?></label>
                <input type="text" class="form-control" name="ordering" id="ordering" placeholder="Ordering" value="<?php echo $ordering; ?>" />
            </div>
            <div class="form-group">
                <label for="tinyint">Access <?php echo form_error('access') ?></label>
                <input type="text" class="form-control" name="access" id="access" placeholder="Access" value="<?php echo $access; ?>" />
            </div>
            <div class="form-group">
                <label for="int">Count <?php echo form_error('count') ?></label>
                <input type="text" class="form-control" name="count" id="count" placeholder="Count" value="<?php echo $count; ?>" />
            </div>
            <div class="form-group">
                <label for="params">Params <?php echo form_error('params') ?></label>
                <textarea class="form-control" rows="3" name="params" id="params" placeholder="Params"><?php echo $params; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('administrator/categories') ?>" class="btn btn-danger">Cancel</a>
        </form>
    </body>

</html>
