<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/sticky-footer.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body class="d-flex flex-column">
    <?php include($nav); ?>
    <div id="page-content">
        <?php
        echoAlert('primary', 'mb-0 rounded-0');
