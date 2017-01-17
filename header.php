<!doctype html>
<html lang="en">
<head>
    <title><?php echo bloginfo('name'); ?> | <?php echo get_the_title(); ?> </title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, width=1200" />

    <!-- Older Browsers Fixes -->
    <!--[if (gte IE 6)&(lte IE 8)]>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.1.11.1.min.js"></script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cross-browser.css" />
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

</head>
<body>

    <!-- Full Width Header -->
    <header>
        <nav class="container">
            <a href="<?php echo site_url(); ?>" id="header_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/bacon-lee-logo.png" alt="Bacon Lee Logo"></a>
            <?php wp_nav_menu(); ?>
        </nav>
    </header>

    <!-- Centered Container for Page Content -->
    <div class="container">
    
<?php wp_head(); ?>
