<?php
/*
* Template Name: Full Width Page
*/

get_header();
  while ( have_posts()) {
    the_post();
    ?>
    <section id="page-title">
      <div class="container clearfix">
        <h1><?php the_title();?></h1>
        <?php if(function_exists('the_subtitle')):?> 
          <span><?php the_subtitle(); ?></span>
        <?php endif;?>  

      </div>
    </section>
    <?php
  }
  rewind_posts();
  ?>
  <section id="content">
  <div class="content-wrap"></div>
    <div class="container clearfix">
        <div class="single-post nobottommargin">
          <?php
          if(have_posts()) {
            while(have_posts()) {
              the_post();
              $author_ID = get_the_author_meta('ID');
              $author_URL= get_author_posts_url($author_ID);
              ?>
              <div class="entry clearfix">
                <?php if(has_post_thumbnail()):?>
                <div class="entry-image">
                  <a href=<?php the_permalink();?>>
                    <?php the_post_thumbnail('full');?>
                  </a>
                </div>
              <?php endif;?>
                <div class="entry-content notopmargin">
                 <?php the_content();?>
                  <div class="tagcloud clearfix bottommargin">
                   <?php the_tags('',' ')?>
                  </div>
                </div>
              </div>
              </div>
              <?php
                if(comments_open() || get_comments_number()){
                  comments_template();
                }
              ?>
              <?php
            }
          }
          ?>
        </div> 
    
    </div>
  </section>
  <?php get_footer();?>