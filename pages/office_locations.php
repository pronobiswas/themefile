<?php
/**
 * Template Name: office_locations
 * Description: A clean Office_Locations page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section id="ofice_location">
    <div class="myContiner">
        <div class="office_location_wrapper">
            <div class="office_location_heading_wpapper">
                <?php
                        get_template_part(
                            'template-parts/treatHeading',
                            null,
                            [
                                'treat_heading'    => 'Our Office Locations ',
                                'treat_subHeading' => 'we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise  ',
                            ]
                        );
                ?>
            </div>
            <div class="office_location_map_wpapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.143512974546!2d-74.03667932348571!3d40.6153806435242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24f88ebbd04d9%3A0x1e4876c3e7ffa41d!2s9711%203rd%20Ave%2C%20Brooklyn%2C%20NY%2011209%2C%20USA!5e1!3m2!1sen!2sbd!4v1763640475706!5m2!1sen!2sbd"
                    width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="satelite_map"></iframe>
                <ul class="office_location_map_list">
                    <li>
                        <div class="map_card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d378.5823837521626!2d-74.03405384284153!3d40.61534510187264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24f88ebbd04d9%3A0x1e4876c3e7ffa41d!2s9711%203rd%20Ave%2C%20Brooklyn%2C%20NY%2011209%2C%20USA!5e0!3m2!1sen!2sbd!4v1763789962131!5m2!1sen!2sbd"
                                 style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>9711 3rd Ave, Brooklyn, NY 11209</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.770927028879!2d-74.06322222348177!3d40.72305903693765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250cc6bb652dd%3A0xea4d15316b728997!2s580%20Montgomery%20St%2C%20Jersey%20City%2C%20NJ%2007302%2C%20USA!5e0!3m2!1sen!2sbd!4v1764240097129!5m2!1sen!2sbd"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>686 Bay St, Staten Island, NY 10304</p>
                        </div>
                    </li>
                    
                    
                    
                </ul>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>