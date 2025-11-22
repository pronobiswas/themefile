<?php
/**
 * Template Name: patient_education
 * Description: A clean Patient_Education page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section id="PatientEducation">
    <div class="myContiner">
        <div class="Patient_Education_wrapper">
            
            <div id="exercise_document_wrapper" class="hidden">
                <?php get_template_part('template-parts/home_exercise_program', 'HomeExerciseProgram'); ?>
            </div>
            <div id="faq_section" class="">
                <?php get_template_part('template-parts/frequent_qa', 'FrequentQA'); ?>
            </div>
        </div>

    </div>
</section>


<?php
get_footer();
?>