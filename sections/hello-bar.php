<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/DatesUtilsPolyfen.php');
?>
<div class="hello-bar">
    <small><?= DatesUtilsPolyfen::getEmojiHelloBar() ?> Schedule a free call to get branding advice for your business</small>
    <a href="/schedule"><button class="button secondary-button">Learn more</button></a>
</div>