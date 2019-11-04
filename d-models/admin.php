<?php

loadCore('db.php');
loadCore('flash.php');
loadCore('general.php');
loadModel('d-model.php');

function isLogged()
{
    if (isset($_SESSION['admin_id'])) {
        return true;
    } else {
        return false;
    }
}

function requireLogin()
{
    if (!isLogged()) {
        setAlert('You need to be logged in.', 'danger');
        redirect('admin/index.php');
    }
}

function denyLogged()
{
    if (isLogged()) {
        setAlert('You are already logged in.', 'info');
        redirect('admin/settings.php');
    }
}
