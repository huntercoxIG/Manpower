<?php get_template_part('includes/header'); ?>

<div class="container-fluid banner page404">
  <h2 class="text-center"><i class="glyphicon glyphicon-warning-sign"></i> 404 Error</h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow content404">  
      <div id="content" role="main">
        <h2>The page you were looking for does not exist.</h2>
        <p>Please try one of the links below or use the search form below to try again.</p>
        <div class="row">
          <div class="col-xs-12 col-sm-6 site-map">
            <?php wp_nav_menu(); ?>
          </div>
          <div>
            <div class="col-xs-12 col-sm-6">
              <div class="search-wrap">
                <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                  <div class="search-wrap">
                    <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="..." name="s" id="s">
                    <button class="search-submit" type="submit">Search</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div><!-- /.row -->  

        </div><!-- /#content -->
      </div>
    </div><!-- /.narrow -->  
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
