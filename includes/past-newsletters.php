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
<section class="past-newsletters container-1080 column-to-row">

    <article>
        <h3 class="heading-5"><?php echo $art1_heading; ?></h3>
        <img src="<?php echo $art1_image; ?>" alt="">
        <p><?php echo $art1_excerpt; ?></p>
        <button class="secondary-button small-button margin-right-auto">Read More</button>
    </article>

    <article>
        <h3 class="heading-5"><?php echo $art2_heading; ?></h3>
        <img src="<?php echo $art2_image; ?>" alt="">
        <p><?php echo $art2_excerpt; ?></p>
        <button class="secondary-button small-button margin-right-auto">Read More</button>
    </article>

    <article>
        <h3 class="heading-5"><?php echo $art3_heading; ?></h3>
        <img src="<?php echo $art3_image; ?>" alt="">
        <p><?php echo $art3_excerpt; ?></p>
        <button class="secondary-button small-button margin-right-auto">Read More</button>
    </article>

</section>