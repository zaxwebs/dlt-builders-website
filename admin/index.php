<?php

require_once('../d-core/load.php');
loadCore('cycle.php');
cycleStart();

loadCore('page.php');
loadCore('flash.php');
loadModel('admin.php');

denyLogged();

putHeader('Admin Area', 'nav-admin.php');
?>
<div class="container pt-5">
    <div class="row">
        <div class="col-md-5">
            <h1 class="display-4">Admin Login</h1>
            <form method="post" action="/d-processors/admin.login.php">
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" value="<?= echoFlash('email') ?>" class="form-control">
                    <small class="form-text text-muted">Demo email is: zack@dltbuilders.zax</small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control">
                    <small class="form-text text-muted">Demo password is: test123</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
putFooter();
cycleEnd();
