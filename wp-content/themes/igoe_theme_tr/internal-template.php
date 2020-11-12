<?php 
/* Template Name: Internal */

get_header();
?>
<section class="internal">
    <?php echo the_content();?>
    <div class="about">
        <?php if(is_page('about')) {; ?>
            <?php 
            $left = get_field('section_left');
            $image_right = get_field('section_image');
            $bottom = get_field('section_bottom');
            ?>
            <div class="about-wrap">
                <div class="about-top">
                    <div class="about-left">
                        <?php echo $left ;?>
                    </div>
                    <div class="about-image">
                        <img src="<?php echo $image_right['url'];?>">
                    </div>
                </div>        
                <div class="about-bottom">
                    <?php echo $bottom;?>
                </div>        
            </div>

        <?php } ;?>
    </div>


<<<<<<< HEAD
</section>
=======
>>>>>>> 03e1c61deb4bcec8ac5a0bad417936f7e904a126
<!-- http://www.justinaguilar.com/animations/scrolling.html -->



<?php get_footer() ;?>
