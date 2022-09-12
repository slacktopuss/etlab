<?php

/*
Template Name: home
*/

?>

<?php get_header(); ?>



<main class="nk-pages">
          <section class="section" id="about">
            <div class="container">
              <!-- Block @s -->
              <div class="nk-block nk-block-features-s2">
                <div class="row align-items-center flex-row-reverse gutter-vr-30px">
                  <div class="col-lg-5 col-mb-10">
                    <div class="nk-block-img gfx-re-lgl py-5 py-lg-0 animated" data-animate="fadeInUp" data-delay="0.1">
						
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 1,
						'offset'      => 0,
						'category'    => 8
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?> 	
					
						<?php the_post_thumbnail(
						
						array(863, 863),
						
						array(
							'class' => "etl-round"
						)
						); ?>
					 
						<?php } } wp_reset_postdata(); ?>
					 
                    </div>
                  </div>
                  <!-- .col -->
                  <div class="col-lg-7">
                    <!-- Section Head @s -->
                    <div class="nk-block-text pdb-r">
					
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 1,
						'offset'      => 0,
						'category'    => 8
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?> 
					
                      <h2 class="title animated" data-animate="fadeInUp" data-delay=".1"><?php the_title(); ?></h2>
                      <p class="animated" data-animate="fadeInUp" data-delay=".2"><?php the_content(); ?></p>
					  
						<?php } } wp_reset_postdata(); ?>
					  
                    </div>
                    <!-- .section-head @e -->
                    <div class="row gutter-vr-20px flex-wrap">
                      
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 4,
						'offset'      => 0,
						'category'    => 7
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>  
					  
					  <div class="col-sm-6">
                        <div class="feature feature-s1 animated" data-animate="fadeInUp" data-delay=".4">
                          <div class="feature-icon feature-icon-s5 feature-icon-s5-4">
                            <em class="icon fas fa-check"></em>
                          </div>
                          <div class="feature-text feature-text-s1">
                            <p><?php the_content(); ?></p>
                          </div>
                        </div>
                      </div>
					  
						<?php } } wp_reset_postdata(); ?>
                     
                    </div>
                    <!-- .row -->
                  </div>
                  <!-- .col -->
                </div>
                <!-- .row -->
              </div>
              <!-- .block @e -->
            </div>
			<!-- <img class="xxshape" src="<?php bloginfo('template_url'); ?>/assets/images/head-g.svg"> -->

          </section>
          <!-- // -->
          <section class="section bg-light">
            <div class="container">
              <!-- Block @s -->
              <div class="nk-block nk-block-features-s3">
                <div class="section-head section-head-s7 wide-auto-sm text-center">
                  <h2 class="title animated" data-animate="fadeInUp" data-delay=".1">Наши преимущества</h2>
                </div>
                <div class="row justify-content-center gutter-vr-30px">
                  
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 8,
						'offset'      => 0,
						'category'    => 6
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
				  
				  <div class="col-lg-3 col-md-6">
                    <div class="feature feature-s3 feature-center animated" data-animate="fadeInUp" data-delay=".3">
                      <div class="feature-icon feature-icon-auto">
                        <?php the_content(); ?>
                      </div>
                      <div class="feature-text">
                        <h4 class="title-sm title-semibold iconzz"><?php the_title(); ?></h4>
                      </div>
                    </div>
                  </div>
				  
						<?php } } wp_reset_postdata(); ?>
				  
                </div>
                <!-- .row -->
              </div>
              <!-- Block @e -->
            </div>
          </section>
          <!-- // -->
          <section class="section bg-white" id="benifits">
            <div class="container">
              
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 1,
						'offset'      => 0,
						'category'    => 4
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
			  <div class="row align-items-center flex-row-reverse gutter-vr-30px">
			  <div class="section-head section-head-s7 wide-auto-sm text-center">
                  <h2 class="title animated" data-animate="fadeInUp" data-delay=".1"><?php the_title(); ?></h2>
                </div>
                  
                  <!-- .col -->
                  <div class="col-lg-7">
                    <!-- Section Head @s -->
					
                    <div class="section-head section-head-s9 wide-sm">
					
					<?php the_content(); ?>
					
					</div>
                    <!-- .row -->
                  </div>
				  
				  <div class="col-lg-5 col-mb-10">
                    <div class="section-head nk-block-img gfx-re-lgl animated" data-animate="fadeInUp" data-delay="0.1">
						<?php the_post_thumbnail(
						
						array(1024, 682),
						
						array(
							'class' => "etl-sq"
						)
						); ?>
                    </div>
                  </div>
                  <!-- .col -->
                </div>
						<?php } } wp_reset_postdata(); ?>
			  
              <!-- Block @s -->
              <div class="row justify-content-center">
                
				<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 4,
						'offset'      => 0,
						'category'    => 5
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
				
				<div class="col-lg-3 col-sm-6">
                  <div class="team animated" data-animate="fadeInUp" data-delay=".3">
                    <div class="team-photo">
                      <?php the_post_thumbnail(array(675, 844)); ?>
                    </div>
                    <h5 class="team-name title title-sm"><?php the_title(); ?></h5>
                    <span class="team-position"><?php the_content(); ?></span>
                  </div>
                  <!-- Start .team-profile  -->
                </div>
				
						<?php } } wp_reset_postdata(); ?>
						
              </div>
              <!-- .row -->
            </div>
          </section>
          <section class="section section-product bg-light" id="products">
            <div class="container">
              <!-- Block @s -->
              <div class="nk-block nk-block-features-s4 mgb-m30">
                <div class="row">
				
				
                  <div class="col-lg-4">
                    <div class="section-head">
						
						<h3 style="font-size:2vw">Действующие лицензии на испытания и электроизмерения</h3>
						<p>
                        <br>
						</p>
						
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 2,
						'offset'      => 0,
						'category'    => 3
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
						
						<ul class="list list-check">
                        <li> <?php the_content(); ?> </li>
						</ul>
						
						<?php } } wp_reset_postdata(); ?>
					
                    </div>
                  </div>
                  <!-- .col -->
				  
						<?php
						global $post;

						$myposts = get_posts([ 
						'numberposts' => 2,
						'offset'      => 0,
						'category'    => 3
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
                  <div class="col-lg-4 col-sm-6">
                    <a href="#" class="feature feature-s4 feature-center animated" data-animate="fadeInUp" data-delay=".3">
                      <div class="feature-img">
						<?php the_post_thumbnail(); ?>
                      </div>
                    </a>
                  </div>
						<?php } } wp_reset_postdata(); ?>
                  
                  
                </div>
                <!-- .row -->
              </div>
              <!-- .block @e -->
            </div>
          </section>
          <!-- // -->
        </main>



<?php get_footer(); ?>

