<?php
/* Template Name: Introduction */
get_header();
?>
<?php
the_title();
while (have_posts()) :
    the_post();
    the_post_thumbnail();// show the featured image
    the_content();// show the content   
endwhile;
?>
 <?php
    get_footer();
    ?>