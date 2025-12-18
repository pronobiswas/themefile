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
                     <option value="1">Low Back Home Exercise Program</option>
                     <option value="2">Knee Home Exercise Program</option>
                     <option value="3">Knee Home Exercise Program 2</option>
                     <option value="4">Low Back Home Exercise Program 2</option>
                     <option value="5">Shoulder Home Exercise Program</option>
                     <option value="6">Weist Home Exercise Program</option>
                     <option value="7">Neck Home Exercise Program</option>
                 </select>
             </div>
             <button id="Frequent_QA">Frequent Q &A</button>
         </div>
         <div class="home_exercise_program_content">
            
             <div id="slider" class="slider">
                 <div class="slider-container">
                     <div class="slider-page page-1">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-2">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize1.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-3">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize2.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-4">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize3.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-5">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize4.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-6">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize5.png"
                     alt="Cancer Pain" class="glaryImage">
                         </div>
                     </div>
                     <div class="slider-page page-7">
                         <div class="content">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excercize6.png"
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
<!-- <script>
    let currentIndex = 0;

    const pages = document.querySelectorAll('.slider-page');
    const sliderContainer = document.querySelector('.slider-container');
    const Home_exercise_select = document.getElementById('Home_exercise_select');

    function flipPage(direction) {
        const nextIndex = (currentIndex + direction + pages.length) % pages.length;

        const currentPage = pages[currentIndex];
        const nextPage = pages[nextIndex];


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
</script> -->

<script>
document.addEventListener("DOMContentLoaded", () => {

  let currentIndex = 0;
  const pages = document.querySelectorAll('.slider-page');
  const Home_exercise_select = document.getElementById('Home_exercise_select');

  // Initial state
  pages.forEach((page, i) => {
    gsap.set(page, {
      rotationY: 0,
      opacity: i === 0 ? 1 : 0
    });
    if (i === 0) page.classList.add('active');
  });

  window.flipPage = function (direction) {
  const nextIndex = (currentIndex + direction + pages.length) % pages.length;
  if (nextIndex === currentIndex) return;

  const currentPage = pages[currentIndex];
  const nextPage = pages[nextIndex];

  nextPage.classList.add("active");
  gsap.set(nextPage, { rotationY: 90, opacity: 1 , duration:1 });

  gsap.to(currentPage, {
    rotationY: -280,
    duration: 0.8,
    ease: "power2.inOut",
    onComplete: () => {
      currentPage.classList.remove("active");
      gsap.set(currentPage, {
        opacity: 0,
        rotationY: 0,
        duration: 0,
      });
    }
  });

  gsap.to(nextPage, {
    rotationY: 0,
    duration: 0.01,
    ease: "power2.inOut"
  });

  currentIndex = nextIndex;
};


  Home_exercise_select.addEventListener('change', (e) => {
    const targetIndex = parseInt(e.target.value, 10) - 1;
    flipPage(targetIndex - currentIndex);
  });

});
</script>
