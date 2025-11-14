<?php
/**
 * Template Name: Dr._Salah_Eldin_Mohamed
 * Description: A clean Dr_Salah_Eldin_Mohamed page template with hero, content, contact sidebar and optional map.
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

        <!-- <div class="breadCrumb">
            <p>Home / About Practice / Learn More</p>
        </div>
        <div class="doctor_section_wrapper">
            <div class="doctor_name_wrapper">
                <h2>Dr. Salah Eldin Mohamed</h2>
                <div class="line"></div>
            </div>
            <div class="doctor_details_wrapper">
                <div class="doctor_details">
                    <h3>Dr. Salah Eldin Mohamed</h3>
                    <p>
                        Dr. Salah Eldin Mohamed specializes in Physical Medicine and Rehabilitation, as well as Interventional Spine and Pain Management. Dr. Mohamed started off at Stony Brook University, then did an internship in General Surgery at Louisiana State University School of Medicine. After that, he fine-tuned his skills during a residency at Burke Rehabilitation Hospital/Albert Einstein School of Medicine. With his board certification in Physical Medicine and Rehabilitation as the solid foundation, he took an extra leap to specialize further with a fellowship in Interventional Spine and Pain Management at the renowned Spine Institute of North America. This specialized training enabled him to delve deep into the musculoskeletal system, empowering him to become a doctor for pain management who can tackle a wide range of pain conditions, from the usual suspects like back and neck pain to more complex issues like cancer pain and nerve pain.
                        <br>
                        Dr. Mohamed combines medical and interventional approaches to design individualized treatment plans. With a solid ability to diagnose and manage complex pain issues, this pain management doctor makes sure to stay at the forefront of medical advancements. He is always on the lookout for the latest and greatest pain medicine to stay up-to-date with the latest innovations in pain medicine, making him one of the most sought-after pain management doctors in NYC and NJ.

                    </p>
                </div>
                <div class="doctor_image">
                    <img src="http://localhost/smohamed/wp-content/uploads/2025/11/Dr.-Salah-Eldin-Mohamed.jpg" alt="Dr. Salah Eldin Mohamed">
                </div>
            </div>
        </div> -->
        <?php
            get_template_part(
                'template-parts/doctorTemplate',
                null,
                [
                    'doctor_name'    => 'Dr. Salah Eldin Mohamed',
                    'doctor_heading' => 'Dr. Salah Eldin Mohamed',
                    'doctor_content' => '
                        Dr. Salah Eldin Mohamed specializes in Physical Medicine and Rehabilitation, as well as Interventional Spine and Pain Management. Dr. Mohamed started off at Stony Brook University, then did an internship in General Surgery at Louisiana State University School of Medicine. After that, he fine-tuned his skills during a residency at Burke Rehabilitation Hospital/Albert Einstein School of Medicine. With his board certification in Physical Medicine and Rehabilitation as the solid foundation, he took an extra leap to specialize further with a fellowship in Interventional Spine and Pain Management at the renowned Spine Institute of North America. This specialized training enabled him to delve deep into the musculoskeletal system, empowering him to become a doctor for pain management who can tackle a wide range of pain conditions, from the usual suspects like back and neck pain to more complex issues like cancer pain and nerve pain.
                        <br>
                        Dr. Mohamed combines medical and interventional approaches to design individualized treatment plans. With a solid ability to diagnose and manage complex pain issues, this pain management doctor makes sure to stay at the forefront of medical advancements. He is always on the lookout for the latest and greatest pain medicine to stay up-to-date with the latest innovations in pain medicine, making him one of the most sought-after pain management doctors in NYC and NJ.
                    ',
                    'doctor_image'   => 'http://localhost/smohamed/wp-content/uploads/2025/11/Dr.-Salah-Eldin-Mohamed.jpg',
                    'breadcrumb'     => 'Home / About Practice / Learn More'
                ]
            );

        ?>

</section>
<?php
get_footer();
?>