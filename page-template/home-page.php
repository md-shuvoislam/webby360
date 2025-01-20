<?php
/**
 * Template Name: Home Page
 */
?>
<?php
get_header();
?>

<!-- hero section strt  -->

<section class="hero-area" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header-banner.jpg);">
    <div class="container">
        <div class="row">
            <h1>Build Your Online Presence</h1>
            <p>We are a Digital Marketing Agency skilled in
            Online Marketing Strategies, Web Design and Web Development</p>
            <a href="" class="hero-btn">Get A Free SEO Audit</a>
        </div>
    </div>
</section>


<!-- services section strt  -->

<section class="services-area">
    <div class="container">
        <div class="row services-top">
            <div class="col">
                <div class="service-top-left">
                    <h3>Make Your Mark Online</h3>
                    <h2>Improve global leads with The Top Internet Marketing Company</h2>
                </div>
            </div>
            <div class="col">
                <div class="services-top-right">
                    <p>Webby360 is an experienced digital marketing agency that helps small businesses grow. Build your brand with the best internet marketing company and stay ahead of the competition. We offer everything from web design and development to copywriting services to social media marketing. With our integrated marketing approach, we got you covered 360!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-area-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="services-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/web-design.png" alt="web design">
                    <h4>Web  Design</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col">
                <div class="services-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/web development.png" alt="web development">
                    <h4>Web  Development</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col">
                <div class="services-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/marketing.png" alt="Marketing & Branding Consultation">
                    <h4>Marketing & Branding Consultation</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col">
                <div class="services-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/seo.png" alt="Seo">
                    <h4>Seo</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col">
                <div class="services-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/video-production.png" alt="Video Production">
                    <h4>Video Production</h4>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- strategy section start  -->

<section class="strategy-area">
    <div class="container">
        <div class="row">
            <h3>Our Strategy</h3>
            <h2>Always take time to think before 
            you do something</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="strategry-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/research.png" alt="Research">
                    <h4>Research</h4>
                </div>
            </div>
            <div class="col">
                <div class="strategry-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/planning.png" alt="Planning">
                    <h4>Planning</h4>
                </div>
            </div>
            <div class="col">
                <div class="strategry-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/strategry.png" alt="Strategy">
                    <h4>Strategy</h4>
                </div>
            </div>
            <div class="col">
                <div class="strategry-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/optimization.png" alt="Optimization">
                    <h4>Optimization</h4>
                </div>
            </div>
            <div class="col">
                <div class="strategry-item">
                    <img src="<?php echo get_template_directory_uri();?>/images/result.png" alt="Results">
                    <h4>Results</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- experience section start  -->

<section class="experience-area">
    <div class="container">
        <div class="row">
            <h3>Welcome to Webby360</h3>
            <h2>Years of experience giving Digital Solution to clients</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="experience-item">
                    <h2>200+</h2>
                    <p>Projects done</p>
                </div>
            </div>
            <div class="col">
                <div class="experience-item">
                    <h2>98%</h2>
                    <p>Customer satisfaction rate.</p>
                </div>
            </div>
            <div class="col">
                <div class="experience-item">
                    <h2>4.9-star</h2>
                    <p>Rated by 100+ Verified Google Reviews</p>
                </div>
            </div>
            <div class="col">
                <div class="experience-item">
                    <h2>24/7</h2>
                    <p>Available</p>
                </div>
            </div>
        </div>

        <img src="<?php echo get_template_directory_uri();?>/images/experience image.jpg" alt="">

    </div>
</section>


<!-- CTA section start  -->

<section class="cta-area">
    <div class="container text-center">
        <div class="row align-content-center">
            <h2>Enhance your Digital Presence
            with Webby360</h2>
            <a href="#" class="cta-btn">Get A Free SEO Audit</a>
        </div>
    </div>
</section>

<!-- Testimonial section start  -->

<section class="testimonial">

</section>

<!-- Trusted section start  -->

<section class="trusted-area" style="background-image: url(<?php echo get_template_directory_uri();?>/images/trusted-area-bg.png); background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Bring in the best</h3>
                <h2>Most trusted around the globe</h2>
            </div>
            <div class="col">
                <p>Webby360 is a marketing solutions service that will help your business define and execute your marketing goals. We specialize in internet marketing, digital marketing, SEO, social media management, brand strategy and website development. Our team can solve your marketing obstacles and help your business gain targeted leads.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>