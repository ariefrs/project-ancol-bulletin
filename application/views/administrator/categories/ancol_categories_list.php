<h2 style="margin-top:75px">Categories </h2>
<div class="row" style="margin-bottom: 10px">
    <div class="col-md-12 text-center">
        <div style="margin-top: 8px" id="message">
            <?= $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
</div>
<div class="row table-responsive" style="margin:10px;padding:10px;">
    <table class="table table-bordered table-striped" style="margin-bottom: 10px">
    <tr>
        
        <form action="<?= site_url('administrator/categories/index'); ?>" class="form-inline" method="get">
        <td colspan="2">    
            <input type="text" class="form-control" name="search_title" value="<?= $search_title; ?>" placeholder="Search Title">
        </td>
        <td>
            <input type="text" class="form-control" name="search_alias" value="<?= $search_alias; ?>" placeholder="Search Alias">
        </td>
        <td style="width:15%;">
            <select name="search_publish" class="form-control" id="search_publish">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
        </select>
        </td>
        <td colspan="3">
            <span class="input-group-btn">
                <?php 
                    if ($search_title <> '' XOR $search_alias <> '')
                    {
                        ?>
                        <a href="<?= site_url('administrator/categories'); ?>" class="btn btn-default">Reset</a>
                        <?php
                    }
                ?>
                <button class="btn btn-primary" type="submit">Search</button>
            </span>
        </td>
        </form>
        </td>
    </tr>
    <tr>
            <th>No</th>
            <th>Title</th>
            <th>Alias</th>
            <th>Description</th>
            <th>Publish</th>
            <th>Action</th>
        </tr>
        <?php
            foreach ($categories_data as $categories)
            {
                ?>
        <tr>
            <td width="20px"><?= ++$start ?></td>
            <td><?= $categories->title ?></td>
            <td><?= $categories->alias ?></td>
            <td><?= $categories->description ?></td>
            <td><?= $pub = ($categories->published == '0') ? 'Tidak':'Ya'; ?></td>
            <td style="text-align:center" width="100px">
                <?php 
                echo anchor(site_url('administrator/categories/update/'.$categories->id),'<btn class="glyphicon glyphicon-pencil" title="Update">','id="btnUpdate" '); 
                echo ' | '; 
                echo anchor(site_url('administrator/categories/trash/'.$categories->id),'<btn class="glyphicon glyphicon-trash text-danger" title="Delete">','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
    </table>
</div>
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Total Record : <?= $total_rows ?></a>
</div>
    <div class="col-md-6 text-right">
        <?= $pagination ?>
    </div>
</div>