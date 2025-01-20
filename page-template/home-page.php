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



<?php get_footer(); ?>