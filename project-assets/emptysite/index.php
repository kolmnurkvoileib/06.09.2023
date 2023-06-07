<?php get_header(); ?>

<div class="content">
    <div class="tekst">
    <h1>mike on tore</h1>
    </div>
<?php 
while (have_posts()) : the_post();
    the_content();
endwhile;
?>

</div>

 <?php get_footer(); ?>
 