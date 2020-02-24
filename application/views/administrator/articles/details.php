<?php foreach($articles as $a)
{ ?>

<h1 class="text-center" style="margin-top:75px"><?= $a->title; ?></h1>

<div class="row">
    <span class="text-right"><small> <i class="fa fa-eye"></i> <?= $a->hits .' | '. indonesian_date($a->created) ;?></small></span>
    <?= $a->completetext; ?>
</div>
<?php } ?>
