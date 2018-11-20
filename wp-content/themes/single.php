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
              ?>
              <div class="entry clearfix">
                <div class="entry-title">
                  <h2>This is a Standard post with a Preview Image</h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 10th July 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                  <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                </ul>
                <div class="entry-image">
                  <a href="#"><img src="images/blog/full/1.jpg" alt="Blog Single"></a>
                </div>
                <div class="entry-content notopmargin">
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                  <blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>
                  <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                  <pre>
                    #header-inner {
                    width: 940px;
                    margin: 0 auto;
                    padding-top: 40px;
                  }</pre>
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                  <div class="tagcloud clearfix bottommargin">
                    <a href="#">general</a>
                    <a href="#">information</a>
                    <a href="#">media</a>
                    <a href="#">press</a>
                    <a href="#">gallery</a>
                    <a href="#">illustration</a>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="post-navigation clearfix">
                <div class="col_half nobottommargin">
                  <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
                </div>
                <div class="col_half col_last tright nobottommargin">
                  <a href="#">This is an Embedded Audio Post &rArr;</a>
                </div>
              </div>
              <div class="line"></div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Posted by <span><a href="#">John Doe</a></span></h3>
                </div>
                <div class="panel-body">
                  <div class="author-image">
                    <img src="images/author/1.jpg" alt="" class="img-circle">
                  </div>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
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
              <!-- Comments
                ============================================= -->
                <div id="comments" class="clearfix">
                  <h3 id="comments-title"><span>3</span> Comments</h3>
                  <!-- Comments List
                    ============================================= -->
                    <ol class="commentlist clearfix">
                      <li class="comment even thread-even depth-1" id="li-comment-1">
                        <div id="comment-1" class="comment-wrap clearfix">
                          <div class="comment-meta">
                            <div class="comment-author vcard">
                              <span class="comment-avatar clearfix">
                                <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                              </span>
                            </div>
                          </div>
                          <div class="comment-content clearfix">
                            <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span>
                            </div>
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </li>
                      <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
                        <div id="comment-2" class="comment-wrap clearfix">
                          <div class="comment-meta">
                            <div class="comment-author vcard">
                              <span class="comment-avatar clearfix">
                                <img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                              </span>
                            </div>
                          </div>
                          <div class="comment-content clearfix">
                            <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span>
                            </div>
                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </li>
                    </ol>
                    <div class="clear"></div>
                    <div id="respond" class="clearfix">
                      <h3>Leave a <span>Comment</span></h3>
                      <form class="clearfix" action="#" method="post" id="commentform">
                        <div class="col_one_third">
                          <label for="author">Name</label>
                          <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
                        </div>
                        <div class="col_one_third">
                          <label for="email">Email</label>
                          <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
                        </div>
                        <div class="col_one_third col_last">
                          <label for="url">Website</label>
                          <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                          <label for="comment">Comment</label>
                          <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
                        </div>
                        <div class="col_full nobottommargin">
                          <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
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