<?php
get_header();
?>

<h1>Missions</h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
        <hr>

        <?php
    }
} else {
    echo '<p>No missions found.</p>';
}

get_footer();
?>
