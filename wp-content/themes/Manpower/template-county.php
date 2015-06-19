<?php 
/* 
*
* Template Name: County
*
*/ ?>

<?php get_template_part('includes/header'); ?>
<div class="container-fluid banner <?php 
  /* uses the post id to get the page slug and echos in class name for dynamic banner css on a per page basis */
  $post_id = get_the_ID();

  $post = get_post($post_id);
  $slug = $post->post_name;

  echo $slug; ?>">
  <div class="row">
    <img src="<?php echo CFS()->get('county_banner'); ?>" alt="<?php echo $slug; ?>" class="county-banner">
  </div>  
</div>


<!-- Introduction -->
<div class="container county-intro">
  <div class="row">

    <div class="col-xs-10 col-xs-offset-1 narrow">
      <div id="content" role="main" class="county-pages">
        <h1 class="text-center">Manpower in <?php echo the_title(); ?></h1>
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<!-- County Statistics -->
<div class="statistics">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 narrow">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <h2 class="stats">
              <?php echo CFS()->get('population'); ?>
            </h2>
            <p>people live in <br> <?php echo the_title(); ?>.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h2 class="stats">
              <?php echo CFS()->get('employed_population'); ?>
            </h2>
            <p><?php echo the_title(); ?> residents <br> who are employed.</p>
          </div>

          <div class="col-xs-12 col-sm-4">
            <h2 class="stats">
              <?php echo CFS()->get('business_population'); ?>
            </h2>
            <p> businesses in<br> <?php echo the_title(); ?>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Successful Associates -->
  <div class="container successful-associates">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 narrow">
        <h2 class="successful-associates-title">
          Successful Associates
        </h2>
        <div class="successful-associates">
          <?php 

          $fields = CFS()->get('successful_associates');
          foreach ($fields as $field) : ?>

          <div class="row">
            <div class="col-xs-3">
              <img src="<?php echo $field['associate_image']; ?>" alt="<?php echo $field['associate_name']; ?>">
            </div>
            <div class="col-xs-9">
              <p class="associate-quote">"<?php echo $field['associate_quote']; ?>"</p>
              <p class="associate-name text-right"><?php echo $field['associate_name']; ?></p>
              <p class="associate-title text-right">
                <?php echo $field['associate_title']; ?>
              </p>
            </div>
          
          </div><!-- /.row -->
          <?php  endforeach; ?>
        </div><!-- /.successful-associates slider --> 
      </div>
    </div>
  </div>


<!-- IF Manpower wants it, the 'Our Clients' loop from the counties pages -->

<!-- Our Clients -->
<!-- <div class="our-clients">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 narrow">
        <h2 class="text-center">
          Our Clients
        </h2>
        <ul class="clients-loop">
          <?php 

            $fields = CFS()->get('our_clients');
            foreach ($fields as $field):
              echo '<li>';
                echo '<a href="' .$field['client_link']. '" alt="' .$field['client_name']. '">';
                  echo $field['client_name'];
                echo '</a>'; 
              echo '</li>';
            endforeach;

          ?> 
      </div>
    </div>
  </div>
</div> -->



<!-- Find Out More -->
<div class="find-out-more">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 narrow">
        <h2 class="text-center">
          Find Out More
        </h2>
        <ul class="resources-loop">
          <?php 

            $fields = CFS()->get('find_out_more');
            foreach ($fields as $field):
              echo '<li>';
                echo '<a href="' .$field['resource_link']. '" alt="' .$field['resource_name']. '">';
                  echo $field['resource_name'];
                echo '</a>';  
              echo '</li>';
            endforeach;

          ?> 
      </div>
    </div>
  </div>
</div>


<!-- Search Jobs Button -->
<div class="container search-jobs">
  <a href="<?php get_page_link(24); ?>" class="search-jobs-button text-center">Search <?php echo the_title(); ?> Jobs</a> 
</div>


<?php get_template_part('includes/footer'); ?>
