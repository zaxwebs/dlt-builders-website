<?php

loadCore('db.php');
loadCore('flash.php');
loadCore('general.php');
loadModel('d-model.php');

function getSettings()
{
    return fetch('select * from settings');
}
