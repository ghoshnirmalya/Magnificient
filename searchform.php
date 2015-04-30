<form class="navbar-form navbar-left" role="search"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
	   <input type="text" class="form-control"  value="<?php echo get_search_query(); ?>" name="s" id="s" />
	</div> 
</form>