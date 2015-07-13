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
      <!-- <div class="mp-logo-wrap">

        <img id="mp-logo" src="/wp-content/themes/Manpower/img/mp-eci-logo-blank.png" alt="Javascript Logo" />

        <div>
          <span class="mp-logo-text">Richmond</span>
          <span class="mp-logo-text">Portland</span>
        </div>
      </div> -->

    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
