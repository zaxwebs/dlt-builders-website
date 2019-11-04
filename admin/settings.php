<?php

require_once('../d-core/load.php');
loadCore('cycle.php');
cycleStart();

loadModel('admin.php');
requireLogin();


loadCore('page.php');
loadCore('flash.php');

loadModel('settings.php');

putHeader('Admin Area', 'nav-admin.php');

$settings = getSettings();
?>
<div class="container pt-5 pb-5">
    <form method="post" action="/d-processors/update-settings.php">
        <h2 class="display-4 mb-3">Cover Section</h2>
        <div class="form-group">
            <label>Cover Line</label>
            <input name="cover_text" type="text" value="<?= echoFlash('cover_text', $settings['cover_text']) ?>" class="form-control">
            <small class="form-text text-muted">Appears below company name in cover section of homepage.</small>
        </div>
        <div class="form-group">
            <label>Quote Line</label>
            <input name="quote_line" type="text" value="<?= echoFlash('quote_line', $settings['quote_line']) ?>" class="form-control">
        </div>
        <h2 class="display-4 mb-3 mt-5">About Section</h2>
        <div class="form-group">
            <label>About Company</label>
            <textarea class="form-control" name="about_text" rows="7"><?= echoFlash('about_text', $settings['about_text']) ?></textarea>
        </div>
        <h2 class="display-4 mb-3 mt-5">Expertise Section</h2>
        <div class="form-group">
            <label>Residential Information</label>
            <textarea class="form-control" name="residential_text" rows="3"><?= echoFlash('residential_text', $settings['residential_text']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Commercial Office Information</label>
            <textarea class="form-control" name="office_text" rows="3"><?= echoFlash('office_text', $settings['office_text']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Government Information</label>
            <textarea class="form-control" name="government_text" rows="3"><?= echoFlash('government_text', $settings['government_text']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Education Information</label>
            <textarea class="form-control" name="education_text" rows="3"><?= echoFlash('education_text', $settings['education_text']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Healthcare Information</label>
            <textarea class="form-control" name="healthcare_text" rows="3"><?= echoFlash('healthcare_text', $settings['healthcare_text']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Parking Information</label>
            <textarea class="form-control" name="parking_text" rows="3"><?= echoFlash('parking_text', $settings['parking_text']) ?></textarea>
        </div>
        <h2 class="display-4 mb-3 mt-5">Core Values Section</h2>
        <div class="form-group">
            <label>Company Core Values</label>
            <textarea class="form-control" name="values_text" rows="7"><?= echoFlash('values_text', $settings['values_text']) ?></textarea>
        </div>
        <h2 class="display-4 mb-3 mt-5">Contact Information</h2>
        <div class="form-group">
            <label>Company Address</label>
            <textarea class="form-control" name="company_address" rows="5"><?= echoFlash('company_address', $settings['company_address']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Company Phone</label>
            <input name="company_phone" type="text" value="<?= echoFlash('company_phone', $settings['company_phone']) ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Division Address</label>
            <textarea class="form-control" name="division_address" rows="5"><?= echoFlash('division_address', $settings['division_address']) ?></textarea>
        </div>
        <div class="form-group">
            <label>Division Phone</label>
            <input name="division_phone" type="text" value="<?= echoFlash('division_phone', $settings['division_phone']) ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Quote Email</label>
            <input name="quote_email" type="text" value="<?= echoFlash('quote_email', $settings['quote_email']) ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Service Email</label>
            <input name="service_email" type="text" value="<?= echoFlash('service_email', $settings['service_email']) ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Careers Email</label>
            <input name="career_email" type="text" value="<?= echoFlash('career_email', $settings['career_email']) ?>" class="form-control">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
putFooter();
cycleEnd();
