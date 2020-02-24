<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<h1 style="margin-top:75px"><?= !empty($title)?$title:'';?></h1>
<br /><a href="<?= site_url('administrator/article/create');?>" class="pull-right btn btn-primary" title="Tambah article"><i class="fa fa-plus-circle" aria-hidden="true"></i> Article</a>
<br />

<div class="row table-responsive" style="margin:20px;padding:10px;">
    <table class="table table-bordered table-striped" style="margin: 10px 20px">
        <tr>
            <form action="<?= site_url('administrator/article/index'); ?>" class="form-inline" method="get">
                <td colspan="2"><input type="text" class="form-control" placeholder="Search Title" name="search_title" value="<?= $search_title; ?>"></td>
                <td colspan="2"><input type="text" class="form-control" placeholder="Search Alias" name="alias" value="<?= $alias; ?>"></td>
                <td>
                    <select name="cat" id="cat" class="form-control select2">
                        <option value="">Pilih Kategori</option>
                        <?php foreach($categories as $c)
                            {
                                echo '<option value="'.$c->id.'">'.$c->title.'</option>';

                            }
                        ?>
                    </select>

                </td>
                <td>
                    <select name="section" id="section" class="form-control select2">
                        <option value="">Pilih Sub Kategori</option>
                        <?php foreach($sections as $s)
                            {
                                echo '<option value="'.$s->id.'">'.$s->title.'</option>';

                            }
                        ?>
                    </select>
                </td>
                <td></td>
                <td colspan="4"><span class="input-group-btn">
                        <?php 
                                if ($search_title <> '' XOR $alias <> '')
                                {
                                    ?>
                        <a href="<?= site_url('administrator/article'); ?>" title="Reset" class="btn btn-success"><i class=" fa fa-refresh"></i></a>
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
            <th>Intro Text</th>
            <th>Section</th>
            <th>Categories</th>
            <th># Hits</th>
            <th>Cover</th>
            <th>Action</th>
            <th>ID</th>
        </tr>
        <?php
            foreach ($article_data as $data)
            {
                ?>
        <tr>
            <td width="20px" class="text-right"><?php echo number_format(++$start,0,',','.'); ?></td>
            <td><?= anchor(site_url('administrator/article/details/'.$data->id),$data->title) ; ?></td>
            <td><?= $data->alias; ?></td>
            <td width="20%"><?= $data->introtext; ?></td>
            <td width="20%"><?php $s = $this->Master->get_by_id('sections',$data->sectionid);echo $s->title; ?></td>
            <td width="20%"><?php $c = $this->Master->get_by_id('categories',$data->catid);echo $c->title; ?></td>
            <td><?= $data->hits; ?></td>
            <td><?= !empty($data->images) ? '<img class="img-100px" src='.base_url($data->images).'>':''; ?></td>
            <td style="text-align:center" width="200px">
                <?php
            	echo anchor(site_url('administrator/article/update/'.$data->id),'<btn class="glyphicon glyphicon-pencil" title="Update">','id="btnUpdate" '); 
				echo ' | '; 
				echo anchor(site_url('administrator/article/trash/'.$data->id),'<btn class="glyphicon glyphicon-trash text-danger" title="Delete">','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        <a href="#" class="btn btn-primary">Total Article : <?= $total_rows ?></a>
    </div>
    <div class="col-md-6 text-right">
        <?= $pagination; ?>
    </div>
</div><!-- End of Row -->
