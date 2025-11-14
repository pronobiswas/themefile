<?php
/**
 * Template Name: Treatments_page
 * Description: A clean Treatments page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section id="Condition_page">
    <div class="myContiner">
        <div>
            <?php
                    get_template_part(
                        'template-parts/treatHeading',
                        null,
                        [
                            'treat_heading'    => 'Treatments We Treat',
                            'treat_subHeading' => 'At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first. ',
                        ]
                    );
            ?>
            <?php get_template_part('template-parts/bookingConsultation', 'bookingConsultation'); ?>
        </div>
    </div>
</section>


<?php
get_footer();