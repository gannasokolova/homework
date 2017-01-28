<?php
require_once ('application/config.php');
require_once ('application/session.php');
require_once('assets/templates/header.php');
require_once('application/content_reader.php');

//var_dump($entry = false); die();

$content = getContent($config['content']);
?>

<?php if(!empty($content)):?>
<div class="container">
    <div class="row">
        <?php foreach ($content as $item):
            $content = substr($item['content'], 0, 75);
            $content = rtrim($content, "!,.-");
            $content = substr($content, 0, strrpos($content, ' '));
            $title = substr($item['title'], 0, -4);
            ?>
        <div class="col-md-4">
            <h2><?=$title?></h2>
            <p><?=$content."… "?></p>
            <p><a class="btn btn-default" href="assets/templates/article.php?name=<?=strtolower($item['title'])?>" role="button">View details &raquo;</a></p>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif?>
    <hr>

<?php
require_once('assets/templates/addFiles.php');
require_once('assets/templates/footer.php');

