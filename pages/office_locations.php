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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d757.0514275740738!2d-74.07501063839209!3d40.62534515362204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fb49a1e5ff9%3A0x6e70c63fa0adf5bb!2s686%20Bay%20St%2C%20Staten%20Island%2C%20NY%2010304%2C%20USA!5e0!3m2!1sen!2sbd!4v1763790010288!5m2!1sen!2sbd"
                                 style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>686 Bay St, Staten Island, NY 10304</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.0347448358215!2d-74.04382384228893!3d40.71495692053205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b0703b0d2f%3A0x81a5d7e2eb497bec!2s201%20Marin%20Blvd%20Ste.%203-B%2C%20Jersey%20City%2C%20NJ%2007302%2C%20USA!5e0!3m2!1sen!2sbd!4v1763790060095!5m2!1sen!2sbd"
                                 style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>201 Marin Blvd Ste. 3-B, Jersey City, NJ 07302</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d377.88605321281767!2d-74.03511058076738!3d40.73807975281189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2575eadfb833b%3A0xf00a16431cf8dcf5!2s309%201st%20St%2C%20Hoboken%2C%20NJ%2007030%2C%20USA!5e0!3m2!1sen!2sbd!4v1763790158335!5m2!1sen!2sbd"
                                 style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>309 1st St, Hoboken, NJ 07030</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.887709531469!2d-73.96821863798287!3d40.85238910513457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f6c285464f77%3A0x49b1e5fe5f68ed9!2s2059%20Hudson%20St%2C%20Fort%20Lee%2C%20NJ%2007024%2C%20USA!5e0!3m2!1sen!2sbd!4v1763790254999!5m2!1sen!2sbd"
                                 style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p>2059 Hudson St, Fort Lee, NJ 07024</p>
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