<?php
/**
 * Template Name: About Our Physicians
 * Description: A clean About_Our_Physicians page template with hero, content, contact sidebar and optional map.
 *
 * Place this file in your theme and assign the "About Practice" template to the page in WP admin.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section id="About_Our_Physicians">
    <div class="myContiner">
        <div class="breadCrumb">
            <p>Home / About Practice / About Our Physicians</p>
        </div>
        <div class="About_Our_Physicians_wrapper">
            <div class="our_expertDoctor">
                <?php get_template_part('template-parts/home/Meet_Our_Expert_Doctor', 'MeetOurExpertDoctor'); ?>
            </div>
            <?php get_template_part('template-parts/bookingConsultation', 'bookingConsultation'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>