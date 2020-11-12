<?php 
/* Template Name: Distributor */

get_header();
?>
<style>
    @media (min-width: 992px) {
        main section.contact .form-container {

            max-height: none;
        }
        main section.contact .form-container {
            flex-direction: column;
        }
    }
        main section.contact .form-container .form-contact-info .info-wrap .info-item {
            margin:3em auto;
            padding: 10%;
            justify-content:center;
}
main section.contact .form-container .form-contact-info .info-wrap {
            max-width: none;
}
</style>
<section class="contact">
    <div class="form-container">
        <?php 
        $bg_image = get_field('contact_background');?>
        <div class="form-contact-info" style="background-image: url('<?php echo $bg_image;?>');?>;">
            <div class="info-wrap">
                <div class="info-item">
                    <div class="info-item-bottom">
                        <?php $message = get_field('message'); ?>
                        <?php echo $message;?>
                    </div>
                </div>
            </div>
            <div class="form-overlay"></div>
        </div>
        <div class="form-be-wrap">
            <?php echo do_shortcode('[contact-form-7 id="135" title="Become a distributor"]') ;?>
        </div>
    </div>
    <script>
ScrollReveal().reveal('.form-item', { delay: 300 });
</script>
</section>
<!-- http://www.justinaguilar.com/animations/scrolling.html -->



<?php get_footer() ;?>