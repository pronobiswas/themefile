<?php
/**
 * Treat Component
 * Dynamic props passed from get_template_part() 
 */

$treat_heading    = $args['treat_heading'] ?? 'Default Name';
$treat_subHeading = $args['treat_subHeading'] ?? 'Default Heading';
?>

<section class="traet_heading">
    <div class="treat_heading_wrapper">
        <h2><?php echo esc_html($treat_heading); ?></h2>
        <div class="line"></div>
        <p><?php echo esc_html($treat_subHeading); ?></p>
    </div>
</section>