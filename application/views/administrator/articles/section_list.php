<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<h1 style="margin-top:75px"><?= !empty($title)?$title:'';?></h1>
<br /><a href="<?= site_url('section/create');?>" class="pull-right btn btn-primary" title="Tambah Section"><i class="fa fa-plus-circle" aria-hidden="true"></i> Section</a>
<br />
<div class="row table-responsive" style="margin:10px;padding:10px;">
    <table class="table table-bordered table-striped" style="margin-bottom: 10px">
        <tr>
            <form action="<?= site_url('administrator/section/index'); ?>" class="form-inline" method="get">
                <td colspan="2"><input type="text" class="form-control" placeholder="Search Title" name="search_title" value="<?= $search_title; ?>"></td>
                <td><input type="text" class="form-control" placeholder="Search Alias" name="alias" value="<?= $alias; ?>"></td>
                <td><input type="text" class="form-control" placeholder="Search Description" name="description" value="<?= $description; ?>"></td>
                <td colspan="4"><span class="input-group-btn">
                        <?php 
                                if ($search_title <> '' XOR $alias <> '' XOR $description <> '')
                                {
                                    ?>
                        <a href="<?= site_url('administrator/section'); ?>" title="Reset" class="btn btn-success"><i class=" fa fa-refresh"></i></a>
                        <?php
                                }
                            ?>
                        <button class="btn btn-primary" title="Search" type="submit"><i class=" fa fa-search"></i></button>
                    </span></td>
            </form>
        </tr>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Alias</th>
            <th>Description</th>
            <th>Publish</th>
            <th># Hits</th>
            <th>Action</th>
            <th>ID</th>
        </tr>
        <?php
            foreach ($section_data as $data)
            {
                ?>
        <tr>
            <td width="20px" class="text-right"><?php echo number_format(++$start,0,',','.'); ?></td>
            <td><?= $data->title; ?></td>
            <td><?= $data->alias; ?></td>
            <td><?= $data->description; ?></td>
            <td><?= $pub = ($data->published == 0) ? 'Tidak':'Ya'; ?></td>
            <td><?= $data->count; ?></td>
            <td style="text-align:center" width="200px">
                <?php
            	echo anchor(site_url('administrator/section/update/'.$data->id),'<btn class="glyphicon glyphicon-pencil" title="Update">','id="btnUpdate" '); 
				echo ' | '; 
				echo anchor(site_url('administrator/section/delete/'.$data->id),'<btn class="glyphicon glyphicon-trash text-danger" title="Delete">','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
            </td>
            <td><?= $data->id ?></td>
        </tr>
        <?php
            }
            ?>

    </table>
</div><!-- End of Row -->
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Total Data : <?= $total_rows ?></a>
    </div>
    <div class="col-md-6 text-right">
        <?= $pagination; ?>
    </div>
</div><!-- End of Row -->
