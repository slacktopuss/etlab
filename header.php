<!DOCTYPE html>
<html <?php language_attributes(); ?> class="js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="DENN.ME">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/images/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/images/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/images/fav/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/images/fav/safari-pinned-tab.svg" color="#404040">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/fav/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-config" content="<?php bloginfo('template_url'); ?>/assets/images/fav/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
    <!-- Site Title  -->
    <title>Электроизмерительная лаборатория</title>
    <!-- CSS -->
    <?php wp_head(); ?>
  </head>

<div class="nk-wrap">

 <header class="nk-header page-header is-transparent is-sticky is-shrink is-split" id="header">
          <!-- Header @s -->
          <div class="header-main">
            <div class="container container-xxl">
              <div class="header-wrap">
                <!-- Logo @s -->
                <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                  <a href="<?php echo get_home_url(); ?>" class="logo-link">
				  

				<?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
				  
                    <img class="logo-dark" src="<?php echo $custom_logo__url[0]; ?> " srcset="<?php echo $custom_logo__url[0]; ?>  2x" alt="logo">
                    <img class="logo-light" src="<?php echo $custom_logo__url[0]; ?> " srcset="<?php echo $custom_logo__url[0]; ?>  2x" alt="logo">
                  </a>
                </div>
                <!-- Menu Toogle @s -->
                <div class="header-nav-toggle">
                  <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                    <div class="toggle-line">
                      <span></span>
                    </div>
                  </a>
                </div>
                <!-- Menu @s -->
                <div class="header-navbar header-navbar-s2 flex-grow-1 animated" data-animate="fadeInDown" data-delay=".75">
                  <nav class="header-menu header-menu-s2" id="header-menu">
                    <ul class="menu mx-auto">
                      <li class="menu-item has-sub">
                        <a class="menu-link nav-link menu-toggle" href="#">Виды работ</a>
                        <div class="menu-sub menu-drop menu-mega menu-mega-3clmn">
                          <div class="menu-mega-innr">
                            <ul class="menu-mega-list">
                              <li class="menu-item">
                                <a href="#">Приемо-сдаточные испытания</a>
                              </li>
                              <li class="menu-item">
                                <a href="#">Эксплуатационные испытания</a>
                              </li>
                              <li class="menu-item">
                                <a href="#">Поиск места повреждения кабеля</a>
                              </li>
                              <li class="menu-item">
                                <a href="#">Проверка адресации</a>
                              </li>
                              <li class="menu-item">
                                <a href="#">Измерение параметров качества электроэнергии</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="menu-item">
                        <a class="menu-link nav-link" href="<?php echo get_home_url( null, 'prices/', 'https' ); ?>">Стоимость</a>
                      </li>
                      <li class="menu-item has-sub">
                        <a class="menu-link nav-link menu-toggle" href="#">Измерения</a>
                        <div class="menu-sub menu-drop menu-mega menu-mega-2clmn">
                          <div class="menu-mega-innr">
                            <ul class="menu-mega-list">
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Визуальный осмотр электроустановки</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Измерение сопротивление изоляции</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Измерение параметров цепи <span class="badge badge-dot"></span>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Проверка металлосвязи</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Проверка автоматических выключателей</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Проверка и испытание УЗО и ДИФ</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Измерение сопротивления контура заземления</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Испытание силовых трансформаторов</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Испытание высоковольтных кабелей</a>
                              </li>
                              <li class="menu-item">
                                <a class="menu-link nav-link" href="#">Испытание трансформаторных подстанций</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="menu-item">
                        <a class="menu-link nav-link menu-toggle" href="#">Контакты</a>
                      </li>
                    </ul>
                    <ul class="menu">
						
						
							
						
                      <li class="menu-item">
						<?php 
							$phone_number = get_field('phone_1');
							$phone_library = \libphonenumber\PhoneNumberUtil::getInstance();
							$phone_data_1 = $phone_library->parse($phone_number);
							?>
						<a class="menu-link nav-link" href="tel:<?php echo get_field('phone_1'); ?>"><b><?php echo $phone_library->format($phone_data_1, \libphonenumber\PhoneNumberFormat::NATIONAL); ?></b></a>
                      </li>
					  
					  
                      <li class="menu-item phone-wrapper">
                        <a href="#" class="btn phone-btn btn-md btn-auto btn-secondary no-change" >
                          <span>Проверить<br> протокол</span>
                        </a>
                      </li>
                    </ul>
					
					
                  </nav>
                </div>
                <!-- .header-navbar @e -->
              </div>
            </div>
          </div>
          <!-- .header-main @e -->
          <div class="header-banner bg-grad">
            <div class="nk-banner">
              <div class="banner banner-inner banner-page">
                <div class="banner-wrap my-auto">
                  <div class="container container-xxl">
                    <div class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-30px">
                      <div class="col-lg-6 col-xl-7 col-md-8 col-sm-9 order-lg-last">
                        <div class="banner-gfx banner-gfx-s2 position-relative m-0 mx-auto">
                          <!-- <img src="#" alt="mockup"> -->
                        </div>
                      </div>
                      <!-- .col -->
                      <div class="col-lg-6 col-xl-5 text-center text-lg-start">
                        <div class="banner-caption tc-light">
						
						 
						
                          <div class="banner-caption xx-light animated" data-animate="fadeInUp" data-delay="1.25">
                            <div class="cpn-head mt-0">
                              <h1 class="title title-lg-s4">Электроизмерительная лаборатория</h1>
                            </div>
							
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 1,
						'offset'      => 0,
						'category'    => 9
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>	
							
                            <div class="xpn-text cpn-text-s3 pb-2">
                              <p class="xpn-text lead lead-s3 pb-1"><?php the_title(); ?></p>
                              <p class="xpn-text"><?php the_content(); ?></p>
                            </div>
							
						<?php } } wp_reset_postdata(); ?>
						
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 1,
						'offset'      => 0,
						'category'    => 10
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
							
                            <div class="cpn-btns">
                              <ul class="btn-grp">
                                <li>
                                  <a class="btn btn-lg btn-theme-dark" href="#" data-bs-toggle="modal" data-bs-target="#modal-form">
                                    <span class="btn-img pe-3"></span>
                                    <span class="btn-text"><?php the_content(); ?></span>
                                    <em class="ti ti-arrow-right ps-2"></em>
                                  </a>
                                </li>
                              </ul>
                            </div>
							
						<?php } } wp_reset_postdata(); ?>
							
                          </div>  
                        </div>
                      </div>
                      <!-- .col -->
                    </div>
                    <!-- .row -->
                  </div>
                </div>
              </div>
            </div>
            <!-- .nk-banner -->
            <img class="xxshape" src="<?php bloginfo('template_url'); ?>/assets/images/head-w.svg">
            <div class="nk-ovm">
              <div class="nk-ovm-inner"></div>
            </div>
          </div>
          <!-- Banner @s -->
          <!-- .header-banner @e -->
        </header>

