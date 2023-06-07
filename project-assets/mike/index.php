<?php get_header(); ?>

<div class="content">
<h1>body</h1>
<?php 
while (have_posts()) : the_post();
    the_content();
endwhile;
?>

</div>

 <?php get_footer(); ?>
 