<?php get_template_part('includes/header'); ?>

	<section class="banner">

	<?php the_post_thumbnail('banner'); ?>

		<!-- Text overlay -->
		<div class="container overlay">
			<h2 class="text-center"><?php echo CFS()->get('heading_text'); ?></h2>

			<div class="row">
				<div class="col-xs-3"></div>
				<!--  Search jobs nearby -->
				<div class="col-xs-3">
					<a href="/wp-content/themes/Manpower/page-e-connect.php"><?php echo CFS()->get('left_box_text'); ?></a>
				</div>
				<!-- Fill out a job application -->
				<div class="col-xs-3">
					<a href="/wp-content/themes/Manpower/page-contact.php"><?php echo CFS()->get('right_box_text'); ?></a>
				</div>
				<div class="col-xs-3"></div>
			</div>
		</div>
	</section>

	<!-- Quick Buttons - Three Column -->
<div class="container three">
	<div class="row">

		<div class="col-sm-4">
			<img src="<?php echo CFS()->get('left_image'); ?>">
			<h3><?php echo CFS()->get('left_heading'); ?></h3>
			<p><?php echo CFS()->get('left_paragraph'); ?></p>
		</div>

		<div class="col-sm-4">
			<img src="<?php echo CFS()->get('center_image'); ?>">
			<h3><?php echo CFS()->get('center_heading'); ?></h3>
			<p><?php echo CFS()->get('center_paragraph'); ?></p>
		</div>

		<div class="col-sm-4">
			<img src="<?php echo CFS()->get('right_image'); ?>">
			<h3><?php echo CFS()->get('right_heading'); ?></h3>
			<p><?php echo CFS()->get('right_paragraph'); ?></p>
		</div>

	</div><!-- /.row -->
</div><!-- /.container -->


<!-- Map section -->
<section class="map">
	<div class="map-wrap">
		<div class="circle-wrap">
			<h3>A Closer Look</h3>
			<p>at the counties where we have jobs for you.</p>

			<!-- Circular Map of Indiana + Highlighted counties -->
			<img src="wp-content/themes/Manpower/img/map.png" alt="">
		</div><!-- /.circle-wrap -->

		<!-- Individual County shapes -->
		<div class="counties-wrap">
			<div class="counties">
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/blackford.png" alt=""></a>
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/jay.png" alt=""></a>
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/randolph.png" alt=""></a>
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/wayne.png" alt=""></a>
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/henry.png" alt=""></a>
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/feyette.png" alt=""></a>
				<a href="" class="county-shapes"><img src="/wp-content/themes/Manpower/img/union.png" alt=""></a>
			</div>
		</div><!-- /.counties-wrap -->	
	</div><!-- /.map-wrap -->
</section>	

<?php get_template_part('includes/footer'); ?>