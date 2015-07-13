<?php get_template_part('includes/header'); ?>

<div class="container-fluid banner search">
  <h2 class="text-center"> Search Results</h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow search-results">  
      <div id="content" role="main">
        <h2><?php _e('Search Results for', 'bst'); ?> &ldquo;<span><?php the_search_query(); ?></span>&rdquo;</h2>
        <?php get_template_part('includes/loops/content', 'search'); ?>
          

        </div><!-- /#content -->
      </div>
    </div><!-- /.narrow -->  
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
