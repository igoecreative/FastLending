<?php 
/* Template Name: Internal */

get_header();
?>

<!-- http://www.justinaguilar.com/animations/scrolling.html -->
<section class="internal-heading">
    <?php $heading = get_field('internal_heading') ;?>
    <h1><?php echo $heading ;?></h1>
</section>


<?php get_footer() ;?>
