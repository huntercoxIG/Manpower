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
      <div id="content" role="main" class="our-services-content">
          <div class="row">
            <!-- Content -->
            <div class="col-sm-7">
              <?php get_template_part('includes/loops/content', 'page'); ?>
            </div>
            
            <!-- Services Summary -->
            <div class="col-sm-5">
              <?php 
                $fields = CFS()->get('featured_services');

                foreach ($fields as $field) {
                  echo '<p class="side-service">';
                    /* anchor tag 'name' attribute 
                    echo '<a href="#' . $field['service_name'] . '">';
                    */
                      echo $field['service_name'];
                    /*echo '</a>';*/  
                  echo '</p>';
                }
              ?>
            </div>
          </div><!-- /.row -->
      </div><!-- /#content -->
    </div> <!-- .narrow -->
    
  </div><!-- /.row -->
</div><!-- /.container -->

<!-- Full-width service descriptions -->
<div class="services">
  <?php 
    $fields = CFS()->get('featured_services'); 
    foreach ($fields as $field) { ?>
    
      <div class="full-service"><!-- 
        <a name="<?php echo $field['service_name']; ?>"> -->
          <div class="container">
            <div class="col-xs-10 col-xs-offset-1 narrow">
              <!-- Service Name -->
              <h4>
                <?php echo $field['service_name']; ?>
              </h4>
              
              <!-- Service Description -->
              <p>
                <?php echo $field['service_description']; ?>
              </p>
            </div><!-- .narrow -->
          </div><!-- /.container -->
        <!-- </a> -->
      </div><!-- /.full-service -->
   <?php }
  ?>
</div>
<?php get_template_part('includes/footer'); ?>
