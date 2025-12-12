<?php
// Function to enqueue Bootstrap CSS and JS
// function enqueue_bootstrap() {
//     wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
//     wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
// }

// add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

function mohammed_theme_scripts() {
    // Load JS file
    wp_enqueue_script('mohammed-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
    wp_enqueue_script('contact-js', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'mohammed_theme_scripts');


function theme_enqueue_styles() {
    // Load main stylesheet
    wp_enqueue_style('mohammed-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/style/customStyle.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



// ========form submition=====

// Handle the contact form submission via AJAX
add_action('wp_ajax_nopriv_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_contact_form', 'handle_contact_form_submission');

function handle_contact_form_submission() {
    // Check nonce for security
    if ( !isset($_POST['contact_form_nonce_field']) || !wp_verify_nonce($_POST['contact_form_nonce_field'], 'contact_form_nonce') ) {
        wp_send_json_error( 'Nonce verification failed.' );
        wp_die();
    }

    // Process form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $mobile = sanitize_text_field($_POST['mobile']);
    $location = sanitize_text_field($_POST['location']);
    $message = sanitize_textarea_field($_POST['YourMessage']);

    // Optionally, send an email
    $subject = 'New Contact Form Message';
    $to = get_option('admin_email'); // Or any email address
    $message_content = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nMobile: $mobile\nLocation: $location\nMessage: $message";

    wp_mail($to, $subject, $message_content);

    // Respond with a success message
    wp_send_json_success('Thank you for contacting us! We will get back to you shortly.');

    wp_die(); // End AJAX request
}
