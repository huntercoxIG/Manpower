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
      <div id="content" role="main" class="clients-content">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->


<!-- Client Sign-up form -->
<div class="container-fluid clients-form">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">   
      <div class="clients-form-wrap">   
        <?php echo do_shortcode( '[gravityform id="3" title="false" description="false"]' ) ?>
      </div><!-- /.clients-form -->
    </div>
  </div><!-- /.row -->  
</div><!-- /.contact-form -->

<?php get_template_part('includes/footer'); ?>
