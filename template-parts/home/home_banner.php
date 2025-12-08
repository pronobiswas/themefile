<?php
/**
 * Home Banner Template Part
 *
 * @package Mohammed
 */

?>

<section id="homeBanner" class="home_banner">
    <div class="banner_content_wrapper">
        <div class="video_slider">
            <div class="banner_video active">
                <span>video 1</span>
                <video autoplay muted loop playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/home_banner_video.mp4"
                        type="video/mp4">
                </video>
            </div>
            <div class="banner_video">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/bannerVideo1.mp4"
                        type="video/mp4">
                </video>
            </div>
            <div class="banner_video">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/video/bannerVideo3.mp4"
                        type="video/mp4">
                </video>
            </div>
            <!-- Navigation -->
            <div class="controls">
                <button id="prevVideo" aria-label="Previous Video">⟨</button>
                <button id="nextVideo" aria-label="Next Video">⟩</button>
            </div>
        </div>
        <div class="banner_content">
            <h1>Live Life Pain-Free</h1>
            <p>Advanced Pain Institute of Texas is a full-spectrum, multi-disciplinary pain management practice focused
                on providing the best patient-focused care for a wide range of chronic pain conditions.</p>
            <div class="btnWrapper">
                <a href=""></a>
                <div class="myBtn">
                    <span>(948)228-1198</span>
                </div>
                <a href="<?php echo home_url('/abbout_our_physicians'); ?>">
                    <div class="myBtn">
                        <span>Book Appointment</span>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<script>
const slides = document.querySelectorAll(".banner_video");
const nextBtn = document.getElementById("nextVideo");
const prevBtn = document.getElementById("prevVideo");
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove("active");
    if (i === index) {
      slide.classList.add("active");
    }
  });
}

nextBtn.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
  console.log("clicked next");
  
});

prevBtn.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
  console.log("clicked prev");
});

// Optional: Auto slide every 8 seconds
setInterval(() => {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}, 8000);
</script>