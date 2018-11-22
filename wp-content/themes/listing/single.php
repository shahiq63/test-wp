<?php get_header();?>
  <section id="content">
    <div class="content-wrap"></div>
    <div class="container clearfix">
      <div class="postcontent nobottommargin clearfix">
        <div class="single-post nobottommargin">
          <?php
          if(have_posts()) {
            while(have_posts()) {
              the_post();
              $author_ID = get_the_author_meta('ID');
              $author_URL= get_author_posts_url($author_ID);
              ?>
              <div class="entry clearfix">
                <div class="entry-title">
                  <h2><?php the_title();?></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> <?php echo get_the_date();?></li>
                  <li><a href=<?php echo $author_URL;?>><i class="icon-user"></i> <?php the_author();?></a></li>
                  <li><i class="icon-folder-open"><?php the_category();?></li>
                  <li><a href="#"><i class="icon-comments"></i> <?php comments_number('0');?></a></li>
                </ul>
                <div class="entry-image">
                  <a href=<?php the_permalink();?>>
                    <?php the_post_thumbnail('full');?>
                  </a>
                </div>
                <div class="entry-content notopmargin">
                 <?php the_content();?>
                  <div class="tagcloud clearfix bottommargin">
                   <?php the_tags('',' ')?>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="post-navigation clearfix">
                <div class="col_half nobottommargin">
                  <?php previous_post_link();?>
                </div>
                <div class="col_half col_last tright nobottommargin">
                  <?php next_post_link();?>
                </div>
              </div>
              <div class="line"></div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Posted by <span><a href="<?php echo $author_URL;?>"> <?php the_author();?></a></span></h3>
                </div>
                <div class="panel-body">
                  <div class="author-image">
                    <?php echo get_avatar($author_ID,90,'',false,array('class'=>'img-circle'));?>
                  </div>
                 <?php echo get_the_author_meta('description');?>
                </div>
              </div>
              <div class="line"></div>
              <h4>Related Posts:</h4>
              <div class="related-posts clearfix">
                <div class="mpost clearfix">
                  <div class="entry-image">
                    <a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
                  </div>
                  <div class="entry-c">
                    <div class="entry-title">
                      <h4><a href="#">This is an Image Post</a></h4>
                    </div>
                    <ul class="entry-meta clearfix">
                      <li><i class="icon-calendar3"></i> 10th July 2014</li>
                      <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                    </ul>
                    <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                  </div>
                </div>
                <div class="mpost clearfix">
                  <div class="entry-image">
                    <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
                  </div>
                  <div class="entry-c">
                    <div class="entry-title">
                      <h4><a href="#">This is a Video Post</a></h4>
                    </div>
                    <ul class="entry-meta clearfix">
                      <li><i class="icon-calendar3"></i> 24th July 2014</li>
                      <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                    </ul>
                    <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
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
        <?php get_sidebar(); ?>   
      </div>
    </div>
  </section>
  <?php get_footer();?>