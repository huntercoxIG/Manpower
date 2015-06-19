<?php get_template_part('includes/header'); ?>
<div class="container-fluid banner <?php 
  /* uses the post id to get the page slug and echos in class name for dynamic banner css on a per page basis */
  $post_id = get_the_ID();

  $post = get_post($post_id);
  $slug = $post->post_name;

  echo $slug; ?>">
  <h2 class="text-center"><?php the_title()?></h2>
</div>

<div class="container">
  <div class="row">
    
    <div class="col-xs-10 col-xs-offset-1 narrow">
      <div id="content" role="main" class="downloads-content">
        <?php get_template_part('includes/loops/content', 'page'); ?>

        <?php 
          $fields = CFS()->get('file_downloads_loop');

          echo '<ul class="downloads-list">';

            foreach ($fields as $field) {
                echo '<li><span class="glyphicon glyphicon-download"></span>';
                  echo '<a class="" href="' . $field['file_download'] . '" download>';
                    echo $field['file_name'];
                  echo '</a>';  
                echo '</li>';
            }

          echo '</ul>';
        ?>
      </div><!-- /#content -->
    </div>
    

  </div><!-- /.row -->
</div><!-- /.container -->


<?php get_template_part('includes/footer'); ?>
