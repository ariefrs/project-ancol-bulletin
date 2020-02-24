<html>
    <head>
        <title><?php echo $title ; ?></title>
    </head>
    <body>
        <div class="section-header">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="row">
            <span class="text-right"><small> <i class="fa fa-eye"></i> <?= $hits .' | '. indonesian_date($created) ;?></small></span>
            <?php echo $completetext; ?>
        </div>
    </body>
</html>