<?php
/**
 * Doctor Section Component
 * Dynamic props passed from get_template_part()
 */

$doctor_name    = $args['doctor_name'] ?? 'Default Name';
$doctor_heading = $args['doctor_heading'] ?? 'Default Heading';
$doctor_content = $args['doctor_content'] ?? 'Default content';
$doctor_image   = $args['doctor_image'] ?? '';
$breadcrumb     = $args['breadcrumb'] ?? 'Home / Page / Subpage';

?>

<section id="doctor_section">
    <div class="myContiner">

        <div class="breadCrumb">
            <p><?php echo esc_html($breadcrumb); ?></p>
        </div>

        <div class="doctor_section_wrapper">

            <div class="doctor_name_wrapper">
                <h2><?php echo esc_html($doctor_heading); ?></h2>
                <div class="line"></div>
            </div>

            <div class="doctor_details_wrapper">

                <div class="doctor_details">
                    <h3><?php echo esc_html($doctor_name); ?></h3>
                    <p><?php echo wp_kses_post($doctor_content); ?></p>
                </div>

                <?php if ($doctor_image): ?>
                    <div class="doctor_image">
                        <img src="<?php echo esc_url($doctor_image); ?>" alt="<?php echo esc_attr($doctor_name); ?>">
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
