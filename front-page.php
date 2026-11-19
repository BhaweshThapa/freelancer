<?php

get_header();

// echo "<pre>";
// print_r(new WP_Query());
// echo "</pre>";

$homePosts = new WP_Query([
    'post_type' => 'page'
]);

// echo "<pre>";
// print_r($homePosts);
// echo "</pre>";

while ($homePosts->have_posts()) {
    $homePosts->the_post();
?>

<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>

<?php
    }

    wp_reset_postdata();

    echo "this is front-page.php";
    get_footer();
    // for single page
?>