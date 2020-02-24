<title><?= isset($title)?$title:''; ?></title>
<h2><?= isset($title)?$title:''; ?></h2>
    <div class="col-lg-12 col-md-12 col-xs-12">
        <?=  !empty($success_msg)?'<p>'.$success_msg.'</p>':''; ?>
        <?=  !empty($error_msg)?'<p>'.$error_msg.'</p>':''; ?>
        <form action="<?= $action; ?>" method="post" class="form-horizontal">
        <div class="row">
            <div class="col-md-6">                
                <div class="row">
                    <label for="title" class="">Judul Artikel</label>
                    <?= form_error('title','<p class="label-danger">','</p>'); ?><br/>
                    <input type="text" class="form-control" name="title" value="<?= !empty($article_title)?$article_title:''; ?>">
                </div>                
                <div class="row">
                    <label>Intro Artikel</label>
                    <?=  form_error('intro','<p class="label-danger">','</p>'); ?><br/>
                        <textarea class="form-control" rows="4" cols="5" name="introtext"><?=  !empty($introtext)?$introtext:''; ?></textarea>
                </div>
                
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="row">
                    <label for="catid" class="">Kategori</label>
                    <?= dropdown('catid','categories','title','id',' form-control select2','',$catid_selected,'','style="width:100%"'); ?>
                </div>
                <div class="row">
                    <label for="sectionid" class="">Seksi</label>
                    <?= dropdown('sectionid','sections','title','id',' form-control select2','',$sectionid_selected,'','style="width:100%"'); ?>
                </div>            
                <div class="row">
                    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?= !empty($images)? '<img src="'.base_url($images).'" alt="Cover" title="Cover" class="img-responsive">':''?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">                
                <label>Isi Artikel</label>
                <?=  form_error('content','<p class="label-danger">','</p>'); ?><br/>
                    <textarea id="summernote" class="" rows="4" cols="2" name="completetext"><?=  !empty($completetext)?$completetext:''; ?></textarea>
            </div>
        </div>
        </form>
    </div>