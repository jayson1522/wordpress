<?php
/*
  Template Name: Home
*/
get_header(); ?>


    <header>
      
      <p class="title">
        <?php the_title(); ?> | 
        <span style="font-family: arial Narrow; font-size: 27px;">
          <?php the_field('sub_title'); ?>
        </span>
    </header>

    <section id="main">
      

                    <p class="main2">
                      <?php the_field('banner_title'); ?>
                    </p>

                    
                    <div id="image">  
                      <img src="<?php echo get_template_directory_uri(); ?>/images/contentmodel.png" alt="onelogo" width="221" height="254"/>
                    </div>



  
                    <?php while(have_rows('steps')): the_row(); ?>
                      <div class="city">
                        <img src="<?php the_sub_field('image'); ?>" alt="onelogo" width="111" height="111"/>

                      </div>

                      <div class="city1">
                          <img src="<?php the_sub_field('image_arrow'); ?>" alt="onelogo" width="20" height="24"/>
                      </div>
                    <?php endwhile; ?>
                    
               
                    <div class="join">

                        <p><span style="color:#aeccc6;">J</span>oin us for <span style="color:#b40101">FREE</span></p>
                      
                    </div>

                    <div class="promote">
                      
                      <p><span style="color:#777777; font-size:14px">Promote Our Products</span> by placing our affiliate link on your website.</p>

                    </div>


                    <div class="user">
                      
                      <p><span style="color:#777777">User Clicks</span> on affiliate link <span style="color:#777777">& buys product(s)</span></p>

                    </div>
                


                    <div class="you">
                      
                      <p><span style="color:#777777">You get <span style="color:#b40101;">30%</span> of the Sale!</span> payout when your account reaches $50</p>

                    </div>

    </section>

                <div id="bot">

                  <?php while(have_rows('blurbs')): the_row(); ?>

                  <div class="gallery">
                    
                          <div class="desc"><?php the_sub_field('title'); ?></div>

                              <div class="word">
                                  <div class="word2">
                                    <?php the_sub_field('description'); ?>
                                  </div>
                              </div>

                       
                  </div>
                  <?php endwhile; ?>


  </div>