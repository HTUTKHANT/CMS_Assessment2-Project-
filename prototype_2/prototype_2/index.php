<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package version2
 */

get_header();
?>

	<main id="primary" class="site-main">
        <!-- Hero Section -->
        <section class="home-hero">
            <h1>Testing</h1>
            <p>Descriptions.</p>
        </section>

    

 

        <!-- Info Section -->
        <section class="home-info" id="about">
            <!-- <h2 class="about-intro">About JCU</h2> -->
            <!-- <p class="about-intro">James Cook University has been at the forefront of education and research.  -->
                <!-- Our programs offer a blend of theory and practical experience to prepare you for the real world.</p> -->

            <!-- About Slideshow -->
            <div class="slideshow-container" id="admission">
                <!-- First Slide -->
                <div class="slide fade">
                    <h2>Trimester System</h2>
                    <p>With a trimester program, you can complete your Bachelors degree in 2 years 
                        and Masters degree in 1 year (depending on the course taken).</p>
                    <h2>Globally recognised Australian degree.</h2>
                    <p>You will graduate with exactly the same globally recognised degree as 
                        students who study at James Cook University in Australia.</p>
                </div>

                
                <!-- Second Slide -->
                <div class="slide fade">
                    <h2>Admissions Requirements</h2>
                    <p>The entry requirements differ from country to country and according to the applicant's desired course of study. 
                        In general applicants must have satisfactorily completed 12 years of schooling 
                        and appropriate English Proficiency level equating to a minimum IELTS of 6.0. 
                        Pathway programs are available for progression to our degree courses.</p>
                        <p>Email: <a href="mailto:admissions-singapore@jcu.edu.au">admissions-singapore@jcu.edu.au</a></p>
                    </div>
                    
                <!-- Third Slide -->
                <div class="slide fade">
                    <h2>JCU Intercampus Exchange Program</h2>
                    <p>James Cook University provides the opportunity for you to study in Singapore 
                        and in Australia and yet still remain as a Singapore based student paying your fees in Singapore currency. 
                        This is a unique program in Asia and is only able to operate because the university operates across both countries. 
                        The program is designed to ensure you get the best possible outcomes from your years of study with the university.</p>
                </div>
                    
                <!-- Fourth Slide -->
                <div class="slide fade">
                    <h2>Varie of courses</h2>
                    <p><b> majors in Business:</b> You can complete the double major at no extra cost or time commitment</p>
                    <p><b> Joint Masters of IT and Business Administration:</b> Get broader industry exposure and wider career options with a joint Masters program.</p>
                    <p><b>Psychology Accreditation:</b> Our Bachelor of Psychological Science courses are accredited by the Australian Psychology Accreditation Council (APAC).</p>
                    <p><b>Diploma Programs:</b> Students with Year 12, GCE 'A' Level or its equivalent who do not meet direct entry to a degree program are eligible to pursue this qualification.</p>
                </div>


            <!-- Include about from about.php -->
            <section id="home-info">
            <?php get_template_part('about'); ?>
            </section>

        </section>

        <!-- Call to Action Section -->
        <!-- Include call to action section from cta.php -->
        <section id="cta">
        <?php get_template_part('cta'); ?>
        </section>

        <!-- Visit Our Campus Section -->
        <!-- Include form from visit-campus.php -->
        <section id="visit-our-campus">
        <?php get_template_part('visit-campus'); ?>
        </section>

        <!-- Include form from form.php -->
        <section id="enroll-now-form">
        <?php get_template_part('form'); ?>
        </section>
        
        <!-- Include Back to Top Button from totop.php -->
        <section id="back-to-top">
        <?php get_template_part('totop'); ?>
        </section>

	</main><!-- #main -->


<script>

    // Read More button 
    document.addEventListener('DOMContentLoaded', function() {
        var aboutContent = document.getElementById('about-content');
        var readMoreBtn = document.getElementById('about-read-more');

        readMoreBtn.addEventListener('click', function() {
            var isExpanded = aboutContent.classList.contains('expanded');
            aboutContent.classList.toggle('expanded', !isExpanded);
            readMoreBtn.textContent = isExpanded ? 'Read More' : 'Read Less';
        });
    });

    // Animation trigger
    document.addEventListener('DOMContentLoaded', function() {
        var rankingBars = document.querySelectorAll('.ranking-bar');

        rankingBars.forEach(function(bar) {
            var percentage = bar.getAttribute('data-percentage') + '%';
            bar.style.setProperty('--percentage', percentage);
            
            // Trigger the animation after a short delay
            setTimeout(function() {
                bar.classList.add('ranking-bar-animate');
            }, 500);
        });
    });

    // Add smooth scrolling for all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Slide show - information admission
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }

    // JavaScript to toggle the visibility of the Back to Top button
    document.addEventListener('DOMContentLoaded', (event) => {
    const backToTopButton = document.querySelector('.back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) { // Button visible after scrolling down 500px
        backToTopButton.style.display = 'block';
        } else {
        backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', (e) => {
        window.scrollTo({
        top: 0,
        behavior: 'smooth'
        });
    });
    });

</script>


<?php
// get_sidebar();
get_footer();
