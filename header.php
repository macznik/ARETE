<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<title>Kancelaria Rachunkowa ARETE</title>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
`
<body <?php body_class(); ?>>
    <div id="up"></div>
     <div class="text_info_up">
        <?php 
            $phone = get_field('phone_top','options');
            $address = get_field('address_top','options');
            $mail_top = get_field('email_top','options');
        ?>
        <?php if(!empty($phone)) { ?>  
            <div class="info_top"><i class="fa fa-mobile" aria-hidden="true"></i><?php the_field('phone_top','options');?></div>
        <?php } // end checking phone ?>
        <?php if(!empty($address)) { ?>
            <div class="info_top"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('address_top','options');?></div>
        <?php } // end checking address ?>
        <?php if(!empty($mail_top)) { ?>
            <div class="info_top"><i class="fa fa-envelope-open-o" aria-hidden="true"></i><?php the_field('email_top','options');?></div>
        <?php } // end checking email ?>
     </div>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img class='logo_main' src="http://arete.em-com.pl/wp-content/uploads/2018/01/logo2.png" />
            </a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new emcom_walker_nav_menu,
            'fallback_cb' => false,
            'depth' => 2
            )); ?>
        </div>
    </div>
</nav>
