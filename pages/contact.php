<?php
/**
 * Template Name: Contact_page
 * Description: A clean Contact  template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section id="contact_page">
    <div class="myContiner">
        <div class="contact_wrapper">
            <div class="user_short_action">
                <div class="call_to_us actionWrapper">
                    <div class="actionIcon">
                        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#D9D9D9">
                                <path
                                    d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                            </svg></span>
                    </div>
                    <div class="action_description">
                        <h5>Call To Us</h5>
                        <p>We are available 24/7, 7 days a week.</p>
                        <a href="tel:(948)228-1198">Phone: (948)228-1198</a>
                    </div>
                </div>
                <hr>
                <div class="Send_us_email  actionWrapper">
                    <div class="actionIcon">
                        <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#D9D9D9">
                                <path
                                    d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                            </svg></span>
                    </div>
                    <div class="action_description">
                        <h5>Send us email</h5>
                        <p>Fill out our form and we will contact you within 24 hours.</p>
                        <a href="mailto:Info@Abc.com">Email: Info@Abc.com</a>
                        <a href="Support@Website.com">Email: Support@Website.com</a>
                    </div>
                </div>
            </div>
            <div class="contact_form_wrapper">
                <form id="contact_form">
                    <div class="inputRow">
                        <div class="input_col">
                            <label for="first_name">First Name</label>
                            <div class="input_wrapper">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        viewBox="0 -960 960 960" width="24px" fill="#D9D9D9">
                                        <path
                                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                    </svg></span>
                                <input type="text" id="first_name" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="input_col">
                            <label for="last_name">Last Name</label>
                            <div class="input_wrapper">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        viewBox="0 -960 960 960" width="24px" fill="#D9D9D9">
                                        <path
                                            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                    </svg></span>
                                <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="inputRow">
                        <div class="input_col">
                            <label for="email">Email</label>
                            <div class="input_wrapper">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        viewBox="0 -960 960 960" width="24px" fill="#D9D9D9">
                                        <path
                                            d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                                    </svg></span>
                                <input type="email" id="email" name="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="input_col">
                            <label for="mobile">Phone Number</label>
                            <div class="input_wrapper">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        viewBox="0 -960 960 960" width="24px" fill="#D9D9D9">
                                        <path
                                            d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                                    </svg></span>
                                <input type="text" id="mobile" name="mobile" placeholder="Enter phone number">
                            </div>
                        </div>
                    </div>
                    <div class="inputRow">
                        <div class="input_col">
                            <label for="location">Address</label>
                            <div class="input_wrapper">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        viewBox="0 -960 960 960" width="24px" fill="#D9D9D9">
                                        <path
                                            d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                    </svg></span>
                                <input type="text" id="location" name="location" placeholder="Enter Location">
                            </div>
                        </div>
                    </div>
                    <div class="inputRow">
                        <div class="input_col">
                            <label for="YourMessage">Your Message</label>
                            <br>
                            <textarea name="YourMessage" id="YourMessage"></textarea>

                        </div>
                    </div>
                    <button>Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();