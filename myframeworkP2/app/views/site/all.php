<?php 
    echo "ss";  
?>

<?php

foreach($params["posts"] as $post ){
?>
<div>
    <h1>post id  : <?= $post->id ?> </h1>
    <p>
    <?= utf8_encode($post->article); ?>
    </p>
</div>

<?php
}