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
      <div id="content" role="main" class="testimonials-content">
        <!-- Testimonials PHP Loop -->
        <?php

          $fields = CFS()->get('testimonials');

          $i = 0;
          foreach ($fields as $field) : 
          $i++;

            if($i % 2) {
              echo '<div class="row testimonial-row odd"><div class="col-sm-3"><div class="circle">';
                echo '<img src="' . $field['persons_image'] . '" alt="" />';
              echo '</div></div>';

              echo '<div class="col-sm-9"><p class="quote">"';
                echo $field['persons_quote'];
              echo '"</p>';
                echo '<p class="text-right"><strong>' . $field['persons_name'] . '</strong></p>';
                echo '<p class="text-right">' . $field['persons_title'] . '</p>';
              echo '</div></div>';
            }
            else {
              echo '<div class="row testimonial-row even"><div class="col-sm-9"><p class="quote">"';
                echo $field['persons_quote'];
              echo '"</p>';
                echo '<p class="text-left"><strong>' . $field['persons_name'] . '</strong></p>';
                echo '<p class="text-left">' . $field['persons_title'] . '</p>';
              echo '</div>';

              echo '<div class="col-sm-3"><div class="circle">';
                echo '<img src="' . $field['persons_image'] . '" alt="" />';
              echo '</div></div></div>';
            }

          endforeach;
        ?>

      </div><!-- /#content -->
    </div> <!-- .narrow --> 
  </div><!-- /.row -->
</div><!-- /.container -->

<!-- Share your story Form -->
<div class="share-your-story">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 narrow">
        <div class="row">
          <div class="col-sm-5">
            <h4>Share <br>your story!</h4>
            <p>Tell us a little bit about your experience with Manpower.</p>
          </div>
          <div class="col-sm-7">
            <!-- <p>A form will go in this area. It will allow associates to write a testimonial and submit a photo. These will have to be approved before posting and going public.</p> -->

            <!-- Share Your Story form (gravity forms shortcode) -->
            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.narrow --> 

    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.share-your-story -->

<?php get_template_part('includes/footer'); ?>
