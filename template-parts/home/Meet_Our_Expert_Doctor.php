
<?php
/**
 * home meet_our_expert_doctor Template Part
 *
 * @package Mohammed
 */

?>


<section id="Meet_Our_Expert_Doctor">
    <div class="myContainer">
        <div class="specilist_wrapper">
            <div class="specilist_header">
                <span>S P E C I L I S T</span>
                <h3>Meet Our Expert Doctor</h3>
            </div>
            <div class="specilist_card_wrapper">
                <div class="specilist_card">
                    <div class="card_image">
                        <!--  -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DrHossamEldinMohamed.png" alt="doctor image">

                    </div>
                    <div class="card_content">
                        <h6> Dr. Hossam Eldin Mohamed </h6>
                        <p>Physical Medicine & Rehabilitation interventional Pain Management</p>
                        <div class="card_btn_wrapper">
                            <a href="<?php echo home_url('/dr_hossam_eldin_mohamed'); ?>">
                                <div class="myBtn"><span>Learn more</span></div>
                            </a>
                            <a href="<?php echo home_url('/about_our_physician'); ?>" class="interlink">
                                <div class="myBtn">book now</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="specilist_card">
                    <div class="card_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr_salah_eldin_mohammed.png" alt="doctor image">
                    </div>
                    <div class="card_content">
                        <h6> Dr. Salah Eldin Mohamed </h6>
                        <p>Physical Medicine & Rehabilitation interventional Pain Management</p>
                        <div class="card_btn_wrapper">
                            <a href="<?php echo home_url('/dr_salah_eldin_mohamed'); ?>">
                                <div class="myBtn"><span>Learn more</span></div>
                            </a>
                            <a href="<?php echo home_url('/about_our_physician'); ?>" class="interlink">
                                <div class="myBtn">book now</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
