<?php

require_once('../d-core/load.php');
loadCore('cycle.php');
loadCore('general.php');
loadCore('flash.php');
loadCore('auth.php');
loadModel('d-model.php');
loadModel('admin.php');
cycleStart();

denyLogged();

$back = 'admin/index.php';

$email = _post('email');
setFlash('email', $email);

$password = _post('password');

if (empty($email)) {
    setAlert('Enter email.', 'danger');
    redirect($back);
}

$admin = getByWhere('admin', 'email = ?', [$email]);

if (!$admin) {
    setAlert('Incorrect email and password combo.', 'danger');
    redirect($back);
}

if (!verifyPassword($password, $admin['password'])) {
    setAlert('Incorrect email and password combo.', 'danger');
    redirect($back);
}

$_SESSION['admin_id'] = $admin['id'];
unsetFlash('email');
setAlert('Successfully logged in.', 'success');
redirect('admin/settings.php');

cycleEnd();
