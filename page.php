<?php

include_once('header.php');

while (have_posts()) {
    the_post();
?>

<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>


<?php
    }

    echo "this is page.php";
    include_once('footer.php');
    // for single page
?>