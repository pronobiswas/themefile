<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="contactBar">
        <div class="myContiner">
            <div class="contact_wrapper">
                <div>
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg>


                    </span>
                    <span>(948)228-1198</span>
                </div>
                <div>
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                    </span>
                    <span>Support.info@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
    <!-- *******nav bar******* -->
    <header id="header" class="">
        <nav>
            <div class="nav_wrapper">
                <!-- ===nav logo=== -->
                <div class="navLogo">
                    <img src="http://localhost/smohamed/wp-content/uploads/2025/10/header_log.png" alt="logo">
                </div>
                <!-- ===nav menu=== -->
                 <div class="nav_menu hidden">
                    <ul class="nav_menu_list">
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/about-practice'); ?>">About Practice</a></li>
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/conditions'); ?>">Conditions</a></li>
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/treatments'); ?>">Treatments</a></li>
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/patient-education'); ?>">Patient Education</a></li>
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/office-locations'); ?>">Office Locations</a></li>
                        <li class="nav_menu_list_item"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    </ul>
                 </div>
                 <!-- ====nav button=== -->
                  <div class="nav_Buttons">
                    <button>Book Appointment</button>
                    <span id="mobile_menu_icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1E3070"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></span>
                    <span id="mobile_menu_icon_close" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1E3070"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></span>
                  </div>
                  
                  

            </div>
        </nav>
        <div id="nav_menu_mobile" class="hidden">
            <div class="mobileMenuWrapper">
                <ul>
                    <li><a href="#">menu item</a></li>
                    <li><a href="#">menu item 1</a></li>
                    <li><a href="#">menu item 2</a></li>
                    <li><a href="#">menu item 3</a></li>
                    <li><a href="#">menu item 4</a></li>
                    <li><a href="#">menu item 5</a></li>
                </ul>
            </div>
        </div>
    </header>