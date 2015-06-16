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
      <div class="row">
          <!-- MP Richmond -->
          <div class="col-xs-12 col-sm-6 contact-richmond">
            <h4>Manpower <strong>Richmond</strong></h4>
            <p class="phone">(765) 966-2664</p>
            <p class="address">
              <span>500 E Main St.</span><br>Richmond, IN 47374
            </p>
          </div>
          <!-- MP Portland -->
          <div class="col-xs-12 col-sm-6 contact-portland">
            <h4>Manpower <strong>Portland</strong></h4>
            <p class="phone">(270) 726-2888</p>
            <p class="address">
              <span>609 N Meridian St</span> <br> 
              Portland, IN 47371
            </p>
          </div>
        </div><!-- /.row -->
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<div class="container-fluid contact-form">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">      
      <h3 class="contact-us">We're waiting to hear from you so we can find you the job that's right for you!</h3>

      <div id="content" role="main" class="contact-content">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->  
</div><!-- /.contact-form -->
<?php get_template_part('includes/footer'); ?>
