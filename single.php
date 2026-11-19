<?php

include_once('header.php');

while (have_posts()) {
    the_post();
?>

<img src="<?php the_post_thumbnail_url(); ?>">
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>

<?php
    }

    include_once('footer.php');
    // for single blog page
?>