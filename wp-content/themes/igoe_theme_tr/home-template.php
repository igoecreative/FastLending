<?php 
/* Template Name: Home */

get_header();
?>

<!-- http://www.justinaguilar.com/animations/scrolling.html -->

<section class="intro">
    <?php $intro_heading = get_field('intro_heading');?>
    <?php $intro_text = get_field('intro_text');?>
    <div class="intro-text">
        <h1><?php echo $intro_heading?></h1>
        <p><?php echo $intro_text;?></p>
    </div>
</section>
<section class="icon-line-wrap">
<?php $main_heading = get_field('main_heading');?>
<h2><?php echo $main_heading;?></h2>

<?php 

    if( have_rows( 'icon_line' ) ):
        $i = 1;
        while( have_rows('icon_line') ) : the_row();

            $icon_line = get_sub_field('icon_line_image');
            $icon_line_desktop = get_sub_field('icon_line_image_desktop');
            // $icon_line_label = get_sub_field('icon_line_label');
            $icon_line_heading = get_sub_field('icon_line_heading');
            $icon_line_content = get_sub_field('icon_line_content');
?>
            <div class="icon-line-<?php echo $i;?>">
                <div class="icon-image-wrap">
                    <img class="m-only" src="<?php echo $icon_line['url'];?>" alt="<?php $icon_line['title'] ;?>">
                    <img class="d-only" src="<?php echo $icon_line_desktop['url'];?>" alt="<?php $icon_line_desktop['title'] ;?>">
                    <!-- <div class="label-heading">
                        <h4 class="icon-line-label"><?php// echo $icon_line_label ;?></h4>
                        <h5 class="icon-line-heading d-only"><?php// echo $icon_line_heading ;?></h5>
                    </div> -->
                </div>    
                <h5 class="icon-line-heading m-only"><?php echo $icon_line_heading ;?></h5>
                <p class="icon-line-content"><?php echo $icon_line_content ;?></p>
            </div>



<?php
 $i++;
    endwhile;

    else : 

    endif;


;?>

</section>




<?php get_footer() ;?>

