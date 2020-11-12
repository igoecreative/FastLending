
<?php 
/* Template Name: Contact */

get_header();
?>
<section class="contact">
    <div class="form-container">
    <?php 
        $bg_image = get_field('contact_background');?>
        <div class="form-contact-info" style="background-image: url('<?php echo $bg_image;?>');?>;">
            <div class="info-wrap">
                <div class="info-item">
                    <div class="info-item-top">
                        <img class="icon" src="<?php echo get_site_url();?>/images/svg/pin.svg"/>
                    </div>
                    <div class="info-item-address info-item-bottom">
                    <?php $address_heading = get_field('address_heading');?>
                        <h3><?php echo $address_heading;?></h3>
                        <div>
                            <p><?php echo get_field('address_line_1');?></p>
                            <p><?php echo get_field('address_line_2');?></p>
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-item-top">
                        <img class="icon" src="<?php echo site_url();?>/images/svg/call.svg"/>
                        
                    </div>
                    <div class="info-item-phone info-item-bottom">
                        <?php $phone_1 = get_field('phone_1');
                              $phone_2 = get_field('phone_2'); 
                              $phone_heading = get_field('phone_heading');?>
                              <h3><?php echo $phone_heading ;?></h3>
                        <a href="tel:<?php echo $phone_1;?>"><?php echo $phone_2;?></a>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-item-top">
                    <img class="icon" src="<?php echo site_url();?>/images/svg/email.svg"/>
                    </div>
                    <div class="info-item-email info-item-bottom">
                        <?php $email = get_field('email');
                              $email_heading = get_field('email_heading');?>
                        <h3><?php echo $email_heading ;?></h3>
                        <a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a>
                    </div>
                </div>
            </div>
        <div class="form-overlay"></div>    
    </div>
        <div class="form-be-wrap">
            <?php echo do_shortcode('[contact-form-7 id="73" title="Contact form 1"]');?>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){
  $('textarea').attr("rows","5");
  });

ScrollReveal().reveal('.form-item', { delay: 250 });


</script>
<?php get_footer() ;?>

