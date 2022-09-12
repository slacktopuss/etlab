

 <footer class="nk-footer bg-grad">
          <section class="section no-pdy overflow-hidden section-contact bg-transparent" id="contact">
            <div class="container">
              <!-- Block @s -->
              <div class="nk-block block-contact animated" data-animate="fadeInUp" data-delay=".9">
                <div class="row justify-content-center g-0">
                  <div class="col-lg-10">
                    <div id="map" class="etl-sq" style="width: 100%; height: 400px"></div>
                  </div>
                  <!-- .col -->
                </div>
                <!-- .row -->
              </div>
              <!-- .block @e -->
            </div>
            <div class="nk-ovm ovm-top ovm-h-60 bg-light"></div>
            <!-- .nk-ovm -->
          </section>
          <!-- // -->
          <section class="section section-footer bg-transparent">
            <div class="container">
              <!-- Block @s -->
              <div class="nk-block block-footer mgb-m30">
                <div class="row">
                  <div class="col-lg-2 col-sm-4">
                    <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay=".2">
                      <h6 class="wgxx-title" >Наш офис</h6>
					  

					  
                      <div class="wgs-body">
                        <p><?php the_field( 'address' ); ?></p>
                        <p>
                          <br>
                        </p>
                        <p>
							<?php 
							$phone_number = get_field('phone_2');
							$phone_library = \libphonenumber\PhoneNumberUtil::getInstance();
							$phone_data_2 = $phone_library->parse($phone_number);
							?>
							
                          <b><a href="tel:<?php echo get_field('phone_2'); ?>"><?php echo $phone_library->format($phone_data_2, \libphonenumber\PhoneNumberFormat::NATIONAL); ?></a></b>
                        </p>
                        <p>
                          <b><a href="mailto:<?php the_field( 'email_2' ); ?>"><?php the_field( 'email_2' ); ?></a></b>
                        </p>
                      </div>
					  

					  
                    </div>
                  </div>
                  <!-- .col -->
                  <div class="col-lg-2 col-sm-4">
                    <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay=".3">
                      <h6 class="wgxx-title" >Социальные сети</h6>
                      <br>

                        <div class="container" style="position:relative"><img id="main-image" src="<?php bloginfo('template_url'); ?>/assets/images/icons.svg" width="100px" height="100px">
						<a href="<?php the_field('whatsapp'); ?>" class="rim-hotspot" style="width:34.6%; height:34.7%; left:55.9%; top:57.2%; position:absolute; cursor:pointer; display:block; z-index:5; overflow:hidden;"></a>
						<a href="<?php the_field('vk'); ?>" class="rim-hotspot" style="width:32.0%; height:34.6%; left:9.8%; top:57.5%; position:absolute; cursor:pointer; display:block; z-index:5; overflow:hidden;"></a>
						<a href="<?php the_field('instagram'); ?>" class="rim-hotspot" style="width:33.0%; height:32.9%; left:57.3%; top:10.8%; position:absolute; cursor:pointer; display:block; z-index:5; overflow:hidden;"></a>
						<a href="<?php the_field('tiktok'); ?>" class="rim-hotspot" style="width:32.9%; height:37.2%; left:11.1%; top:8.0%; position:absolute; cursor:pointer; display:block; z-index:5; overflow:hidden;"></a></div>

                    </div>
                  </div>
                  <!-- .col -->
                  <div class="col-lg-2 col-sm-4">
                    <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay=".4">
                      <h6 class="wgxx-title" ><?php bloginfo('description'); ?></h6>
                      
					  
					  
					  <div class="wgs-body">
                        <p>
                          <br>
                        </p>
                        <p>
                          <br>
                        </p>
                        <p>
							<?php 
							$phone_number = get_field('phone_1');
							$phone_library = \libphonenumber\PhoneNumberUtil::getInstance();
							$phone_data_1 = $phone_library->parse($phone_number);
							?>
							
                          <b><a href="tel:<?php echo get_field('phone_1'); ?>"><?php echo $phone_library->format($phone_data_1, \libphonenumber\PhoneNumberFormat::NATIONAL); ?></a></b>
                        </p>
                        <p>
                          <b><a href="mailto:<?php the_field( 'email_1' ); ?>"><?php the_field( 'email_1' ); ?></a></b>
                        </p>
						
                      </div>
					  

					  
                    </div>
                  </div>
                  <!-- .col -->
                  <div class="col-lg-6 order-lg-first">
                    <div class="wgs wgs-text animated" data-animate="fadeInUp" data-delay=".1">
                      <div class="wgs-body">
                        <a href="<?php echo get_home_url(); ?>" class="wgs-logo">
							<?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                          <img src="<?php echo $custom_logo__url[0]; ?>" class="logo-footr" srcset="<?php echo $custom_logo__url[0]; ?> 2x" alt="logo">
                        </a>
                        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> <br><?php bloginfo('description'); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- .col -->
                </div>
                <!-- .row -->
              </div>
              <!-- .block @e -->
            </div>
          </section>
          <div class="nk-ovm shape-b"></div>
        </footer>

</div>

<?php get_template_part('form'); ?>

<?php wp_footer(); ?>



</body>
</html>