<?php

require_once('d-core/load.php');
loadCore('cycle.php');
cycleStart();

loadCore('page.php');
loadCore('flash.php');

loadModel('settings.php');
$settings = getSettings();

putHeader($settings['company_name']);
?>
<section id="home-cover">
    <div class="overlay"></div>
    <div class="container rellax" data-rellax-speed="-3" data-rellax-zindex="1">
        <div class="wrap-left">
            <h1 data-aos="fade-right" data-aos-anchor-placement="top-bottom"><?= APP_NAME ?></h1>
            <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="300" class="pb-4">
                <?= htmlentities($settings['cover_text']) ?>
            </p>
            <a data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="600" class="btn btn-secondary mb-2" href="#contact">Contact</a>
        </div>
    </div>
</section>
<section id="home-quote-bar" class="bg-primary text-white rellax" data-rellax-speed="0" data-rellax-zindex="2">
    <div class="container">
        <div class="row pt-1">
            <div class="col-md-8 mb-1 d-flex align-items-center">
                <?= htmlentities($settings['quote_line']) ?>
            </div>
            <div class="col-md-4 mb-1">
                <a class="text-white" href="mailto:"><?= htmlentities($settings['quote_email']) ?></a>
            </div>
        </div>
    </div>
</section>
<section id="home-about">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6 mb-5 d-flex align-items-center">
                <img class="img-fluid" src="/assets/images/5.jpg">
            </div>
            <div class="col-md-6 mb-5">
                <h1 data-aos="fade-left" data-aos-anchor-placement="top-bottom" class="display-4">About Us</h1>
                <p data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <?= nl2br(htmlentities($settings['about_text'])) ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="expertise" class="bg-primary text-white">
    <div class="container pt-5">
        <h1 class="display-4 text-center">Expertise</h1>
        <div class="row pt-5">
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100" class="col-md-4 mb-5">
                <div class="expertise">
                    <h3 class="mb-3">Residential</h3>
                    <div style="background-image: url('/assets/images/1.jpg')" class="image-container">

                    </div>
                    <p>
                        <?= htmlentities($settings['residential_text']) ?>
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100" class="col-md-4 mb-5">
                <div class="expertise">
                    <h3 class="mb-3">Commercial Offices</h3>
                    <div style="background-image: url('/assets/images/2.jpg')" class="image-container">

                    </div>
                    <p>
                        <?= htmlentities($settings['office_text']) ?>
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100" class="col-md-4 mb-5">
                <div class="expertise">
                    <h3 class="mb-3">Government</h3>
                    <div style="background-image: url('/assets/images/3.jpg')" class="image-container">

                    </div>
                    <p>
                        <?= htmlentities($settings['government_text']) ?>
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100" class="col-md-4 mb-5">
                <div class="expertise">
                    <h3 class="mb-3">Education</h3>
                    <div style="background-image: url('/assets/images/6.jpg')" class="image-container">
                    </div>
                    <p>
                        <?= htmlentities($settings['education_text']) ?>
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100" class="col-md-4 mb-5">
                <div class="expertise">
                    <h3 class="mb-3">Healthcare</h3>
                    <div style="background-image: url('/assets/images/8.jpg')" class="image-container">

                    </div>
                    <p>
                        <?= htmlentities($settings['healthcare_text']) ?>
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="100" class="col-md-4 mb-5">
                <div class="expertise">
                    <h3 class="mb-3">Parking</h3>
                    <div style="background-image: url('/assets/images/9.jpg')" class="image-container">

                    </div>
                    <p>
                        <?= htmlentities($settings['parking_text']) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="home-featured" class="bg-secondary text-white">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-6 mt-5 pb-5 d-flex justify-content-end">
                <div class="contained-facade">
                    <h1 class="display-4">Core Values</h1>
                    <p>
                        <?= nl2br(htmlentities($settings['values_text'])) ?>
                    </p>
                </div>
            </div>
            <div style="background-image: url('/assets/images/10.jpg')" id="home-featured-image" class="col-md-6 image-container">
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container mt-5">
        <h1 class="display-4">Contact</h1>
        <div class="row pt-5">
            <div class="col-md-4 mb-5">
                <h2>Address</h2>
                <p>
                    <?= nl2br(htmlentities($settings['company_address'])) ?>
                </p>
                <p>
                    <b>Office Phone</b><br />
                    <a href="tel:<?= htmlentities($settings['company_phone']) ?>"><?= htmlentities($settings['company_phone']) ?></a>
                </p>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Division</h2>
                <p>
                    <?= nl2br(htmlentities($settings['division_address'])) ?>
                </p>
                <p>
                    <b>Office Phone</b><br />
                    <a href="tel:<?= htmlentities($settings['division_phone']) ?>"><?= htmlentities($settings['division_phone']) ?></a>
                </p>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Emails</h2>
                <p>
                    <b>Request For Quote</b><br />
                    <a href="#"><?= htmlentities($settings['quote_email']) ?></a>
                </p>
                <p>
                    <b>Service Enquiry</b><br />
                    <a href="#"><?= htmlentities($settings['service_email']) ?></a>
                </p>
                <p>
                    <b>Careers</b><br />
                    <a href="#"><?= htmlentities($settings['career_email']) ?></a>
                </p>
            </div>
        </div>
    </div>
</section>
<?php
putFooter();
cycleEnd();
