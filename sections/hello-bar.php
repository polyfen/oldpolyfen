<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/DatesUtilsPolyfen.php');
?>
<div class="hello-bar">
    <small><?= DatesUtilsPolyfen::getEmojiHelloBar() ?> We're giving away 4 Brand Audits for free this <?= DatesUtilsPolyfen::getCurrentMonthName() ?></small>
    <a href="/brand-audits"><button class="button secondary-button">Apply now!</button></a>
</div>