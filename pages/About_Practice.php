<?php
/**
 * Template Name: about_practice
 * Description: A clean About/Practice page template with hero, content, contact sidebar and optional map.
 *
 * Place this file in your theme and assign the "About Practice" template to the page in WP admin.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<section id="about_practice">
    <div class="myContiner">
        <div class="breadCrumb">
            <p>home / About Practice</p>
        </div>
        <div class="about_wrapper_container">
            <div class="about_banner">
                <div class="aboutBannerImage">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_banner.jpg"
                        alt="about banner image">
                </div>
            </div>
            <div class="about_content_wraper">
                <div class="about_content">
                    <h3>About Us</h3>
                    <p>Welcome to our Physical Medicine & Rehabilitation and Pain Management practice, where care begins with listening. We believe that every patient deserves time, attention, and understanding — because lasting relief starts with truly knowing your story.</p>
                    <br>
                    <p>
                        Here, you’ll never feel rushed or unheard. We take the time to listen to your concerns, understand your symptoms, and learn how pain affects your daily life. Together, we build a plan that’s personalized to your goals, not just your diagnosis.
                    </p>
                    <br>
                    <p>
                        Our approach combines medical expertise with compassion. We discuss every option with you clearly and honestly, helping you make the choices that feel right for you. Whether we’re restoring movement, managing pain, or helping you regain strength and confidence, our focus remains on you — the person, not just the patient.
                    </p>
                    <br>
                    <p>
                        We believe healing works best as a partnership. Our role is to guide and support you with the best possible care, while you remain the captain of your own journey. Our mission is simple: to help you move better, feel better, and live better — one patient, one story, one step at a time.
                    </p>
                    <div class="btn_wrapper">
                        <a href="#">
                            <div class="myBtn">
                                <span>Meet our Providers</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="about_content_list">
                    <li>
                        <h4>Patient-Centered Compassion</h4>
                        <p>We believe that effective care begins with deep empathy and respect. We listen to understand not just your pain, but how it impacts your daily life, your work, and your relationships. Your goals—whether it’s walking without a cane or playing with your grandchildren—drive our treatment plan.</p>
                    </li>
                    <li>
                        <h4>Evidence-Based, Integrative Care</h4>
                        <p>We commit to providing the safest, most effective, and personalized treatment. Our approach blends cutting-edge physical medicine techniques and interventional procedures with conservative and rehabilitative therapies. We focus on non-surgical solutions that promote lasting health and function.</p>
                    </li>
                    <li>
                        <h4>Functional Restoration</h4>
                        <p>Our ultimate goal is not just pain relief, but functional restoration. We see pain as a barrier, and our purpose is to help you move past that barrier. We empower you to regain mobility, strength, and independence so you can return to the activities you love.</p>
                    </li>
                    <li>
                        <h4> Collaboration and Education</h4>
                        <p>We operate as a transparent team. This means we collaborate closely with your other providers and, most importantly, with you. We dedicate time to educate you about your condition and treatment options, ensuring you are an informed and active partner in your own recovery journey.</p>
                    </li>
                    <li>
                        <h4>Safety and Responsibility</h4>
                        <p>We practice the highest standards of safety, particularly in the responsible use of all medications and procedures. We are dedicated to avoiding dependence and minimizing risks while achieving effective, sustainable results.</p>
                    </li>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>