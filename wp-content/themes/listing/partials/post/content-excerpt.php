<div class="entry clearfix">
  <?php
  if(get_post_format()=='gallery') {
    $gallery = get_post_gallery(get_the_ID(),false);

    ?>
    <div class="entry-image">
      <div class="fslider" data-arrows="false" data-lightbox="gallery">
        <div class="flexslider">
          <div class="slider-wrap">
            <?php
              foreach($gallery['src'] as $src)
               {
              ?>
                <div class="slide"><a href="<?php echo $src; ?>"><img class="image_fade" src="<?php echo $src;?>" alt="Standard Post with Gallery"></a></div>
                <?php
              }
              ?>
          </div>
        </div>
      </div>
    </div>
    <?php
  }elseif(has_post_thumbnail()){
  ?>
  <div class="entry-image">
      <a href=<?php the_permalink();?> data-lightbox="image">
        <?php the_post_thumbnail('full',array('class'=>'image_fade'));?>
      </a>
    </div>
  <?php
}
  ?>

    
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