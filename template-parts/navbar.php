<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link <?php echo basename( get_permalink() ) === 'about' ? 'active' : ''; ?>" href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a>
			</li>
			<li class="nav-item dropdown">
				<span class="nav-link dropdown-toggle <?php echo get_query_var( 'taxonomy' ) === 'genre' ? 'active' : ''; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Films
				</span>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
								$genres       = get_terms( array( 'taxonomy' => 'genre' ) );
								$current_term = get_query_var( 'term' );
					foreach ( $genres as $genre ) {
						?>
									<a class="dropdown-item <?php echo $current_term === $genre->slug ? 'active' : ''; ?>" href="<?php echo esc_url( home_url( '/genre/' . $genre->slug ) ); ?>"><?php echo esc_html( $genre->name ); ?></a>
							<?php
					}
					?>
				</div>
			</li>
		</ul>
	</div>
</nav>
