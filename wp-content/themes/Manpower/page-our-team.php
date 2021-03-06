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
      <div id="content" role="main" class="our-team">
        <div class="row member-grid">
          <?php 

            $fields = CFS()->get('team_members');

            $bios = 0;
            
            foreach ($fields as $field): 

              $src = wp_get_attachment_image_src($field['team_image'], 'team'); 

              $bios++;
                ?>
              
              <!-- Loop for our-team -->
              <div class="col-xs-12 col-sm-6 col-md-3 member-block">
                <img class="team-pic" src="<?php echo $src[0]; ?>" alt="">
                <p class="member-name"><?php echo $field['team_name']; ?></p>
                <p class="member-title"><?php echo $field['team_title']; ?></p>
                <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bio-<?php echo $bios; ?>" aria-expanded="false" aria-controls="bio-<?php echo $bios; ?>">
                  Bio
                </button>
                <div class="collapse bio-overlay" id="bio-<?php echo $bios; ?>">
                  <div class="well">
                    <p><?php  // echo $field['team_bio']; ?></p>
                  </div>
                </div> -->
                <p class="member-bio"><?php echo $field['team_bio']; ?></p>
              </div>

          <?php endforeach; ?>
        </div>
      </div><!-- /#content -->
    </div> <!-- .narrow -->
    
  </div><!-- /.row -->
</div><!-- /.container -->

<div class="group-picture">
  <?php 

    $ID = $cfs->get('team_group_image');
    $image = wp_get_attachment_image_src($ID, 'banner');

    echo '<img src="'.$image[0].'" />';
  ?>
</div>

<?php get_template_part('includes/footer'); ?>
