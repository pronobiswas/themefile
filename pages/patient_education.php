
<?php
/**
 * Template Name: Patient_Education_page
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
            <div class="selectOption">
                <select name="exercise" id="exercise">
                    <option value="Home exercise program">Home exercise program 1</option>
                    <option value="Home exercise program">Home exercise program 2</option>
                    <option value="Home exercise program">Home exercise program 3</option>
                </select>
            </div>
            <div class="exercise_document_wrapper">
                <div class="exercise_document_item">
                    <img src="http://localhost/smohamed/wp-content/uploads/2025/11/image-5.png" alt="exercise_document_item">
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/FrequentQA', 'FrequentQA'); ?>
    </div>
</section>


<?php
get_footer();