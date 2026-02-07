<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo Config::getConfig('URL_BASE'); ?>">
    <title><?php echo Config::getConfig('PROJECT_TITLE'); ?></title>
    <link rel="stylesheet" href="<?php echo Config::getConfig('URL_CSS'); ?>">
    <script src="<?php echo Config::getConfig('URL_JQUERY'); ?>"></script>
    <!-- optional, add local jquery instance for offlince functionality -->
    <script defer src="<?php echo Config::getConfig('URL_JS'); ?>"></script>
</head>
<body class="dark">