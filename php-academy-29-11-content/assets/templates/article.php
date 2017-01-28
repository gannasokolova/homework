<?php
require_once ('../../application/session.php');
require_once('../../application/config.php');
require_once ('../../application/contentViewer.php');

if($_GET['name']) {
    $content = viewArticle($config['content'], $_GET['name']);
}
require_once('../../assets/templates/header.php');
?>
<h1><?=$content[1] ? substr($content [1], 0, -4): substr($_GET['name'], 0, -4)?></h1>
<p class="lead">
    <?=$content[0] ? $content [0]: "NOT FOUND"?>
</p>
    <a class="btn btn-default" href="../../application/download.php?name=<?=$content[1] ? $content[1] : NULL?>">Download</a>
<?php
require_once('../../assets/templates/footer.php');