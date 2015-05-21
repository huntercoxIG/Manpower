<?php get_template_part('includes/header'); ?>

	<section class="banner">
		<div class="container overlay">
			<img src="<?php echo CFS()->get(''); ?>" alt="Manpower banner image">
			<h2 class="text-center"><?php echo CFS()->get('banner_image'); ?></h2>

			<div class="row">
				<div class="col-xs-6">
					<p class="text-right"><?php echo CFS()->get('left_box_text'); ?></p>
				</div>
				<div class="col-xs-6">
					<p class="text-left"><?php echo CFS()->get('right_box_text'); ?></p>
				</div>
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

<div class="container map">
	<div class="row">
		<h3>A Closer Look</h3>
		<p>at the counties where we have jobs for you.</p>

		<img src="<?php echo CFS()->get('map_image'); ?>" alt="map of counties that Manpower ECI serves; Blackford, Fayette, Henry, Jay, Randolph, Union, and Wayne."/>
	</div>
</div>

<?php get_template_part('includes/footer'); ?>