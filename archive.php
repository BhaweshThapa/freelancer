<?php

get_header();

echo "<pre>";
print_r(new WP_Query());
echo "</pre>";

the_archive_title();
the_archive_description();

while (have_posts()) {
    the_post();
?>

<h1><?php the_title(); ?></h1>

<p>Posted by: <?php the_author_posts_link(); ?> on <?php the_time('d, F, Y'); ?> in
    <?php echo get_the_category_list(', '); ?>
</p>
<p><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>">Read More</a>

<?php echo paginate_links(); ?>

<?php
    }
echo "this is archive.php";
get_footer();

?>