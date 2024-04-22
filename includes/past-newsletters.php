<?php
    $art1_heading = "💰 What you Should Know about Brand Equity";
    $art1_image = "#";
    $art1_excerpt = "Understanding brand equity is key. It's not just about logos and slogans; it's the value your brand holds in the minds of consumers.";

    $art2_heading = "🦾 Our Latest R&D Project, Your Keyboard's Assistant";
    $art2_image = "#";
    $art2_excerpt = "Quickly find and copy the symbols and emojis you're looking for.";

    $art3_heading = "✍ The Blog is Dead, Long Live the Newsletter";
    $art3_image = "#";
    $art3_excerpt = "Most Blogs out there demand a lot of resources to end up with a very long, elaborate, polished post, that none or very few people read in full.";
?>


<section class="past-newsletters container-1080 hidden">

    <h2 class="heading-3 align-center">Past Newsletters</h2>    

    <div class="column-to-row">

        <article>
            <h3 class="heading-5"><?php echo $art1_heading; ?></h3>
            <img src="<?php echo $art1_image; ?>" alt="">
            <p><?php echo $art1_excerpt; ?></p>
            <button class="secondary-button small-button margin-right-auto" onclick="openLightbox('article_1_lightbox')">Read More</button>
        </article>

        <article>
            <h3 class="heading-5"><?php echo $art2_heading; ?></h3>
            <img src="<?php echo $art2_image; ?>" alt="">
            <p><?php echo $art2_excerpt; ?></p>
            <button class="secondary-button small-button margin-right-auto" onclick="openLightbox('article_2_lightbox')">Read More</button>
        </article>

        <article>
            <h3 class="heading-5"><?php echo $art3_heading; ?></h3>
            <img src="<?php echo $art3_image; ?>" alt="">
            <p><?php echo $art3_excerpt; ?></p>
            <button class="secondary-button small-button margin-right-auto" onclick="openLightbox('article_3_lightbox')">Read More</button>
        </article>

    </div>

    <div class="lightbox d-none" id="article_1_lightbox">
        <div class="lightbox-modal container-700" onclick="event.stopPropagation();">
            <button class="close-button secondary-button small-button" onclick="closeLightbox('article_1_lightbox')">Close</button>
            <article style="width:100%;">
                <h3 class="heading-5"><?php echo $art1_heading; ?></h3>
                <img src="<?php echo $art1_image; ?>" alt="">
                <p><?php echo $art1_excerpt; ?></p>
            </article>
        </div>
    </div>

    <div class="lightbox d-none" id="article_2_lightbox">
        <div class="lightbox-modal container-700" onclick="event.stopPropagation();">
            <button class="close-button secondary-button small-button" onclick="closeLightbox('article_2_lightbox')">Close</button>
            <article style="width:100%;">
                <h3 class="heading-5"><?php echo $art2_heading; ?></h3>
                <img src="<?php echo $art2_image; ?>" alt="">
                <p><?php echo $art2_excerpt; ?></p>
            </article>
        </div>
    </div>

    <div class="lightbox d-none" id="article_3_lightbox">
        <div class="lightbox-modal container-700" onclick="event.stopPropagation();">
            <button class="close-button secondary-button small-button" onclick="closeLightbox('article_3_lightbox')">Close</button>
            <article style="width:100%;">
                <h3 class="heading-5"><?php echo $art3_heading; ?></h3>
                <img src="<?php echo $art3_image; ?>" alt="">
                <p><?php echo $art3_excerpt; ?></p>
            </article>
        </div>
    </div>

</section>

<script>
    function openLightbox(lightboxId) {
        var lightbox = document.getElementById(lightboxId);
        lightbox.classList.remove('d-none');
    }

    function closeLightbox(lightboxId) {
        var lightbox = document.getElementById(lightboxId);
        lightbox.classList.add('d-none');
    }
</script>
