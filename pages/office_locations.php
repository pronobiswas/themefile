<?php
/**
 * Template Name: Office_Locations_page
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
                <ul class="office_location_map_list">
                    <li>
                        <div class="map_card">
                            <img src="http://localhost/smohamed/wp-content/uploads/2025/11/8ed208891972d76fe555618ea7750d821ab163c2.png"
                                alt="map image">
                            <p>9711 3rd Ave, Brooklyn, NY 11209</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <img src="http://localhost/smohamed/wp-content/uploads/2025/11/8ed208891972d76fe555618ea7750d821ab163c2.png"
                                alt="map image">
                            <p>9711 3rd Ave, Brooklyn, NY 11209</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <img src="http://localhost/smohamed/wp-content/uploads/2025/11/8ed208891972d76fe555618ea7750d821ab163c2.png"
                                alt="map image">
                            <p>9711 3rd Ave, Brooklyn, NY 11209</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <img src="http://localhost/smohamed/wp-content/uploads/2025/11/8ed208891972d76fe555618ea7750d821ab163c2.png"
                                alt="map image">
                            <p>9711 3rd Ave, Brooklyn, NY 11209</p>
                        </div>
                    </li>
                    <li>
                        <div class="map_card">
                            <img src="http://localhost/smohamed/wp-content/uploads/2025/11/8ed208891972d76fe555618ea7750d821ab163c2.png"
                                alt="map image">
                            <p>9711 3rd Ave, Brooklyn, NY 11209</p>
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