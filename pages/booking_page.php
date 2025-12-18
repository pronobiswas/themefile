<?php
/**
 * Template Name: booking_page
 * Description: A booking page template for WordPress
 */

get_header();
?>

<div class="booking-page-container">
    <div class="booking-content">


        <div>
            <div id="iframeContainer" class="booking-modal">
                <div class="booking-modal-inner">
                    <!-- <button class="close-booking">×</button> -->
                    <iframe src="https://d2oe0ra32qx05a.cloudfront.net/?practiceKey=k_1_113265" loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
iframe {
    width: 100%;
    height: 100%;
    min-height: 90vh;
    margin-top: 120px
}
</style>