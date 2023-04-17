<?php
            $logo = get_field('logo', 'option');
            $login_button_text = get_field('login_button_text', 'option');
            $login_button_url = get_field('login_button_url', 'option');
            $sign_up_button_text = get_field('sign_up_button_text', 'option');
            $sign_up_button_url = get_field('sign_up_button_url', 'option');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- ================================ -->
  <!-- ==========   Header   ========== -->
  <!-- ================================  -->
  <header class="w-100 float-left header-con">
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="#">
                <figure class="mb-0">
                    <img src="<?php echo $logo; ?>" alt="logo-icon">
                </figure>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">           
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => false,
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'navbar-nav m-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
              <div class="nav-btn d-flex align-items-center">
                <div class="login-btn">
                    <a href="<?php echo $login_button_url;?>"><?php echo $login_button_text;?> <i class="fas fa-angle-right"></i></a>
                </div>
                <div class="sign-btn generic-btn">
                    <a href="<?php  echo $sign_up_button_url; ?>"><?php echo $sign_up_button_text;?></a>
                </div>
              </div>
            </div>
          </nav>
    </div>
  </header>
  <!-- ================================ -->
  <!-- ==========   Header   ========== -->
  <!-- ================================  -->