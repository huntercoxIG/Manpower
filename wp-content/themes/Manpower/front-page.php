<?php get_template_part('includes/header'); ?>

	<section class="banner">
		<?php the_post_thumbnail('banner'); ?>

		<!-- Text overlay -->
		<div class="overlay">
			<div class="center">	
				<h2 class="desktop text-center">getting good people <br> the right jobs at the best companies.</h2>
				<h2 class="mobile-overlay text-center">Local people. <br> Global connections.</h2>

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-3 hidden-xs"></div>
						<!--  Search jobs nearby -->
						<div class="col-xs-12 col-sm-3">
							<a href="/wp-content/themes/Manpower/page-e-connect.php"><?php echo CFS()->get('left_box_text'); ?></a>
						</div>
						<!-- Fill out a job application -->
						<div class="col-xs-12 col-sm-3">
							<a href="/wp-content/themes/Manpower/page-contact.php"><?php echo CFS()->get('right_box_text'); ?></a>
						</div>
						<div class="col-xs-12 col-sm-3 hidden-xs"></div>
					</div> <!-- /.row -->
				</div><!-- /.container -->


			</div><!-- /.center -->	
		</div><!-- /.overlay -->
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
			<h3>A Closer Look</h3
			<p>at the counties where we have jobs for you.</p>

			<!-- Circular Map of Indiana + Highlighted counties -->
			<img src="/wp-content/themes/Manpower/img/map.png" alt="">
		</div><!-- /.circle-wrap -->

		<!-- Individual County shapes -->
		<div class="counties-wrap">
			<div class="counties">
				<a href="<?php echo get_page_link(70); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/blackford.png" alt=""></a>
				<a href="<?php echo get_page_link(72); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/jay.png" alt=""></a>
				<a href="<?php echo get_page_link(74); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/randolph.png" alt=""></a>
				<a href="<?php echo get_page_link(78); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/wayne.png" alt=""></a>
				<a href="<?php echo get_page_link(76); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/henry.png" alt=""></a>
				<a href="<?php echo get_page_link(80); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/feyette.png" alt=""></a>
				<a href="<?php echo get_page_link(82); ?>" class="county-shapes"><img src="/wp-content/themes/Manpower/img/union.png" alt=""></a>
			</div>
		</div><!-- /.counties-wrap -->	
	</div><!-- /.map-wrap -->
</section>	

<?php get_template_part('includes/footer'); ?>