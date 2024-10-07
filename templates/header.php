 <!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <?php
        if(!function_exists('get_title')) {
            function get_title() {
                return APP_TITLE;
            }
        }
        ?>
        <title><?php echo get_title(); ?></title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
        <link href="<?php echo SITE_URL; ?>includes/bootstrap/css/bootstrap-rtl.css" rel="stylesheet">
        <link href="<?php echo SITE_URL; ?>includes/bootstrap/css/bootstrap-rtl-theme.css" rel="stylesheet">        
        <link href="<?php echo SITE_URL; ?>styles.css" rel="stylesheet">

    </head>
    <body>
    <?php include_once('nav.php'); ?>
    <div class="container">
