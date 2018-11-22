<?php get_header();?>
<section id="page-title">
  <div class="container clearfix">
    <h1><?php the_archive_title();?></h1>
  </div>
</section>

  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="postcontent nobottommargin clearfix">
          <div id="posts">
           <?php if(have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('partials/post/content-excerpt');
            }
          }
          ?>
        </div><!-- #posts end -->
        <ul class="pager nomargin">
            <li class="previous"><?php previous_posts_link('&larr; Previous');?></li>
            <li class="next"><?php next_posts_link('Next &rarr;');?></li>
          </ul>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
</section>
<?php get_footer();?>