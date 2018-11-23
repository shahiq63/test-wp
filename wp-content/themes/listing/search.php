<?php get_header();?>
<section id="page-title">
  <div class="container clearfix">
    <h1>
      <?php
       _e('Search Results for:','listing');
       echo get_search_query();
      ?>
    </h1>

  </div>
</section>
<section id="content">

    <div class="content-wrap">

      <div class="container clearfix">
        <div class="postcontent nobottommargin clearfix">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">What are you searhing for today?</h3>
            </div>
            <div class="panel-body">
              <?php get_search_form();?>
            </div>
          </div
          <div id="posts">
           <?php if(have_posts()) {
            while (have_posts()) {
              the_post();
              ?>
              <div class="entry clearfix">
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
              </div>
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