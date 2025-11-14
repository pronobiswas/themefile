<?php
/**
 * Template Name: Dr._Hossam_Eldin_Mohamed
 * Description: A clean Dr._Hossam_Eldin_Mohamed page template with hero, content, contact sidebar and optional map.
 *
 * Place this file in your theme and assign the "About Practice" template to the page in WP admin.
 */
$doctor_name    = $args['doctor_name'] ?? 'Default Name';
$doctor_heading = $args['doctor_heading'] ?? 'Default Heading';
$doctor_content = $args['doctor_content'] ?? 'Default content';
$doctor_image   = $args['doctor_image'] ?? '';
$breadcrumb     = $args['breadcrumb'] ?? 'Home / Page / Subpage';

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section>
        <?php
            get_template_part(
                'template-parts/doctorTemplate',
                null,
                [
                    'doctor_name'    => ' Dr. Hossam Eldin Mohamed ',
                    'doctor_heading' => ' Dr. Hossam Eldin Mohamed ',
                    'doctor_content' => '
                        Physical Medicine & Rehabilitation | Pain Management Specialist
                        <br>
                        <br>
                        Dr. Hossam Eldin Mohamed is a highly skilled and compassionate physician specializing in Physical Medicine and Rehabilitation (PM&R) and Pain Management. He provides comprehensive care for patients with joint and spine conditions, focusing on restoring function, relieving pain, and improving quality of life.
                        <br>
                        <br>
                        Dr. Mohamed began his medical training at SUNY Downstate Medical Center, where he completed his surgical internship. He then pursued a residency in Physical Medicine and Rehabilitation at Burke Rehabilitation Hospital, affiliated with the Albert Einstein College of Medicine. Following this, he completed a Pain Medicine Fellowship at Louisiana State University Medical Center.
                        <br>
                        <br>
                        Dedicated to evidence-based, patient-centered care, Dr. Mohamed combines clinical excellence with a personable and approachable style. He takes pride in tailoring individualized treatment plans that address the underlying causes of pain and functional limitations. With extensive experience in interventional pain procedures and rehabilitation therapies, Dr. Mohamed is committed to helping patients achieve lasting relief and return to an active, fulfilling lifestyle.

                    ',
                    'doctor_image'   => 'http://localhost/smohamed/wp-content/uploads/2025/11/656f9beee081d0b3102f39c0f5f062754ac33dbf-1.png',
                    'breadcrumb'     => 'Home / About Practice / Learn More'
                ]
            );
        ?>

</section>
<?php
get_footer();
?>