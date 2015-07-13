<?php
/*
Navbar search form
==================

If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php.

Then you can insert the Search Widget into the sidebar.
*/
?>

<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
	  <i class="glyphicon glyphicon-search"></i>
	</button>

	<div class="collapse" id="collapseExample">
	  <div class="search-wrap">
	  	<input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="..." name="s" id="s">
	  	<button class="search-submit" type="submit">Search</button>
	  </div>
	</div>

</form>