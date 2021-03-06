<?php get_header();?>
  <section id="content">

    <div class="content-wrap">

      <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
        <div>
          <div class="container clearfix">
            <span class="label label-danger bnews-title">Breaking News:</span>

            <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
              <div class="flexslider">
                <div class="slider-wrap">
                  <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                  <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                  <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container clearfix">

        <!-- Post Content
                ============================================= -->
        <div class="postcontent nobottommargin clearfix">
          <div id="posts">
           <?php if(have_posts()) {
            while (have_posts()) {
              the_post();
              include(get_template_directory(). '/partials/post/content-excerpt.php');
              ?>
              <!-- <div class="entry clearfix">
                <div class="entry-image">
                  <a href=<?php the_permalink();?> data-lightbox="image">
                    <?php the_post_thumbnail('full',array('class'=>'image_fade'));?>
                  </a>
                </div>
                <div class="entry-title">
                  <h2><a href=<?php the_permalink();?>><?php the_title();?></a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> <?php echo get_the_date();?></li>
                  <li><a href=<?php echo get_author_posts_url(get_the_author_meta('ID'));?>><i class="icon-user"></i> <?php the_author();?></a></li>
                  <li><i class="icon-folder-open"></i> <?php the_category(' ');?></li>
                  <li><a href=<?php the_permalink();?>><i class="icon-comments"></i><?php comments_number('0')?></a></li>
                </ul>
                <div class="entry-content">
                  <p><?php the_excerpt();?></p>
                  <a href=<?php the_permalink();?> class="more-link">Read More</a>
                </div>
              </div> -->

          <?php
        }

           }
           ?>

          </div><!-- #posts end -->

          <ul class="pager nomargin">
            <li class="previous"><?php previous_posts_link('&larr; Previous');?></li>
            <li class="next"><?php next_posts_link('Next &rarr;');?></li>
          </ul><!-- .pager end -->

        </div><!-- .postcontent end -->

        <?php get_sidebar(); ?>

      </div>
    </div>
</section>
<?php get_footer();?>