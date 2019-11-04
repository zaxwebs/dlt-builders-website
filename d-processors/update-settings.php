<?php

require_once('../d-core/load.php');
loadCore('cycle.php');
loadCore('general.php');
loadCore('flash.php');
loadCore('auth.php');
loadModel('d-model.php');
loadModel('admin.php');
cycleStart();

requireLogin();

$back = 'admin/settings.php';

$postables = ['quote_line', 'cover_text', 'about_text', 'residential_text', 'office_text', 'government_text', 'education_text', 'healthcare_text', 'parking_text', 'values_text', 'company_address', 'company_phone', 'division_address', 'division_phone', 'service_email', 'quote_email', 'career_email'];
$values = [];

foreach ($postables as $postable) {
    if (!isset($_POST[$postable])) {
        setAlert('Something went wrong.', 'danger');
        redirect($back);
    } else {
        //set flashes
        //this can also be split to it's own loop for when you need non-bail behaviour
        $$postable = $_POST[$postable];
        $values[] = $$postable; //this array will be fed to query
        setFlash($postable, $$postable);
    }
}

// you can add additional validation here


$values = [];
$sets = '';

foreach ($postables as $postable) {
    $values[] =  $_POST[$postable];
}

$sets = implode(' = ?, ', $postables);

$query = 'update settings set ' . $sets . ' = ?';

if (query($query, $values)) {
    setAlert('Settings updated successfully.', 'success');
    redirect($back);
}


cycleEnd();
