<?php
if ($_SESSION['errors']){
    foreach ($_SESSION['errors'] as $value){
        echo "<p class=\"h1\"> {$value} </p>";
    }
}
if ($_SESSION['info']) {
    echo "<p class=\"h1\"> {$_SESSION['info']} </p>";
}

unset($_SESSION['errors']);
unset($_SESSION['info']);

if(array_key_exists('auth',$_SESSION)):?>
<form role="form" method = 'post' action = '/php-academy-29-11-content/application/addFiles.php'>
 <div class="form-group">
  <label for="title">Заголовок</label>
  <input type="text" name = 'title' class="form-control" id="title" placeholder="Введите заголовок статьи"
            value="<?= $_SESSION['title'] ? $_SESSION['title'] : NULL?>">
 </div>
    <div class="form-group">
        <label for="content">Статья</label>
        <textarea name ='content' class="form-control" rows="5" id="content">
            <?= $_SESSION['content'] ? $_SESSION['content'] : NULL?>
        </textarea>
    </div>
 </div>
 <button type="submit" class="btn btn-success">Опубликовать</button>
</form>
<?php endif;
unset($_SESSION['title']);
unset($_SESSION['content']);
?>