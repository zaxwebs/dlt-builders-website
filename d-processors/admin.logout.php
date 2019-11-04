<?php

require_once('../d-core/load.php');
loadCore('cycle.php');
loadCore('general.php');
loadCore('flash.php');
loadModel('admin.php');

cycleStart();

if (isLogged()) {
    unset($_SESSION['admin_id']);
    setAlert('Successfully logged out.', 'success');
    redirect('admin/index.php');
} else {
    setAlert('You are already logged out.', 'danger');
    redirect('admin/index.php');
}

cycleEnd();
