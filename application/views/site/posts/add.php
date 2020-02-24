<title><?= isset($title)?$title:''; ?></title>
<h2><?= isset($title)?$title:''; ?></h2>
    <div class="col-lg-12 col-md-12 col-xs-12">
        <?=  !empty($success_msg)?'<p>'.$success_msg.'</p>':''; ?>
        <?=  !empty($error_msg)?'<p>'.$error_msg.'</p>':''; ?>
        <form method="post" class="form-horizontal">
            <div class="col-md-8">                
                <div class="row">
                    <label for="title" class="">Judul Artikel</label>
                    <?= form_error('title','<p class="label-danger">','</p>'); ?><br/>
                    <input type="text" class="form-control" name="title" value="<?= !empty($post['title'])?$post['title']:''; ?>">
                </div>                
                <div class="row">
                    <label>Intro Artikel</label>
                    <?=  form_error('intro','<p class="label-danger">','</p>'); ?><br/>
                        <textarea class="form-control" rows="4" cols="5" name="intro"><?=  !empty($post['intro'])?$post['intro']:''; ?></textarea>
                </div>
                <div class="row">
                    <label>Isi Artikel</label>
                    <?=  form_error('content','<p class="label-danger">','</p>'); ?><br/>
                        <textarea id="summernote" class="" rows="4" cols="2" name="content"><?=  !empty($post['content'])?$post['content']:''; ?></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <label for="catid" class="">Kategori</label>
                    <?= dropdown('catid','categories','title','id',' form-control select2','','','','style="width:100%"'); ?>
                </div>
                <div class="row">
                    <label for="sectionid" class="">Seksi</label>
                    <?= dropdown('sectionid','sections','title','id',' form-control select2','','','','style="width:100%"'); ?>
                </div>            
                <div class="row">
                    <input type="submit" name="submitBtn" value="S a v e" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>