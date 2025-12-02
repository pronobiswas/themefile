 <?php
/**
 * home_exercise_program component
 * Dynamic props passed from get_template_part() 
 */

?>
 <section id="home_exercise_program">

     <div class="home_exercise_program_wrapper">
         <div class="home_exercise_program_header">
             <div class="select_option">
                 <select id="Home_exercise_select">
                     <option value="1">Home exercise program 1</option>
                     <option value="2">Home exercise program 2</option>
                     <option value="3">Home exercise program 3</option>
                     <option value="4">Home exercise program 4</option>
                 </select>
             </div>
             <button id="Frequent_QA">Frequent Q &A</button>
         </div>
         <div class="home_exercise_program_content">
            
             <div id="slider" class="slider">
                 <div class="slider-container">
                     <div class="slider-page page-1">
                         <div class="content">
                            <p>Home exercise program 1</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/petient_doc_1.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-2">
                         <div class="content">
                            <p>Home exercise program 2</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/petient_doc_1.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-3">
                         <div class="content">
                            <p>Home exercise program 3</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/petient_doc_1.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-3">
                         <div class="content">
                            <p>Home exercise program 4</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/petient_doc_1.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                 </div>
                 <button class="prev-btn" onclick="flipPage(-1)">Previous</button>
                 <button class="next-btn" onclick="flipPage(1)">Next</button>
             </div>

         </div>
     </div>

 </section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script>
    let currentIndex = 0;

    const pages = document.querySelectorAll('.slider-page');
    const sliderContainer = document.querySelector('.slider-container');
    const Home_exercise_select = document.getElementById('Home_exercise_select');

    function flipPage(direction) {
        const nextIndex = (currentIndex + direction + pages.length) % pages.length;

        // if (nextIndex < 0 || nextIndex >= pages.length) return; 

        const currentPage = pages[currentIndex];
        const nextPage = pages[nextIndex];

        // GSAP animation for flipping effect
        gsap.to(currentPage, {
            rotationY: -280, 
            duration: 1.5,
            transformOrigin:'left top', 
            ease: "power2.inOut", 
        });

        gsap.set(nextPage, {
            rotationY: 0,
            duration: .2,
            ease: "power2.inOut"
        });

        currentIndex = nextIndex; 
    }

    Home_exercise_select.addEventListener('input', (e) => {
        let pageno = parseInt(e.target.value, 10) - 1;
        if (pageno !== currentIndex) {
            flipPage(pageno - currentIndex); 
        }
    });
</script>