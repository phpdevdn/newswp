<form class="navbar-form navbar-right" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
					</div>
					<button type="submit" class="btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">Submit</button>
				</form>