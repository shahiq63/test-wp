<?php get_header();?>
  <section id="page-title">

    <div class="container clearfix">
      <h1>Page Not Found</h1>
    </div>

  </section><!-- #page-title end -->

  <!-- Content
    ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">

        <div class="col_half nobottommargin">
          <div class="error404 center">404</div>
        </div>

        <div class="col_half nobottommargin col_last">

          <div class="heading-block nobottomborder">
            <h4>Ooopps.! The Page you were looking for, couldn't be found.</h4>
            <span>Try searching for the best match or browse the links below:</span>
          </div>
          <div>          <?php get_search_form()?>
        </div>

        </div>

      </div>

    </div>

  </section>
<?php get_footer();?>