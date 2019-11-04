<?php loadModel('admin.php') ?>
<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><?= APP_NAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php if (isLogged()) { ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/settings.php">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php">View Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/d-processors/admin.logout.php">Logout</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>