<?php
/* Template Name: test */
the_title();
while(have_posts()):
    the_post();
    the_content();
endwhile;
?>
