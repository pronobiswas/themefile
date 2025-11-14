<?php
/**
 * Template Name: Conditions_we_treat
 * Description: A clean About/Practice page template with hero, content, contact sidebar and optional map.
 *
 * Place this file in your theme and assign the "About Practice" template to the page in WP admin.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<section id="Condition_page">
    <div class="myContiner">
        <div>
            <?php get_template_part('template-parts/home/condition_we_treat', 'conditionWeTreat'); ?>
             <?php get_template_part('template-parts/bookingConsultation', 'bookingConsultation'); ?>
        </div>
    </div>
</section>



<?php
get_footer();