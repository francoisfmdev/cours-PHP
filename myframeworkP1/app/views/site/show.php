<h1>Post N° <?= $params['id'];  ?> </h1>

<?php
$post = $params['post'];


?>

<h1>post ID: <?=  $post->id; ?> </h1>

<p>
    <?= utf8_encode($post->article);  ?>
</p>