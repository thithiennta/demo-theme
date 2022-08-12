<?php
function film_metabox_callback( $post ) {
	wp_nonce_field( 'film_custom_field_nonce', 'film_custom_field_nonce' ); ?>

	<?php
	$custom_field = get_post_meta( $post->ID, 'custom_field', true );
	?>
	<p>
		<label for="custom_field"><?php _e( 'Custom field', 'cde-theme' ); ?></label><br/> 
		<input type="text" id="custom_field" name="custom_field" value="<?php echo esc_attr( $custom_field ); ?>" />
	</p>
	<?php
}
function film_custom_field_save( $post_id ) {

	if ( ! isset( $_POST['film_custom_field_nonce'] ) || ! wp_verify_nonce( $_POST['film_custom_field_nonce'], 'film_custom_field_nonce' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if ( ! isset( $_POST['custom_field'] ) ) {
		return;
	}

	update_post_meta( $post_id, 'custom_field', $_POST['custom_field'] );

}
function cde_custom_meta_box() {
	add_meta_box( 'film-custom-field', __( 'Custom field', 'cde-theme' ), 'film_metabox_callback', 'film' );
}
add_action( 'add_meta_boxes', 'cde_custom_meta_box' );
add_action( 'save_post', 'film_custom_field_save' );

function about_metabox_callback( $post ) {
	if ( 'about' !== $post->post_name ) {
		return;
	}
	wp_nonce_field( 'about_custom_field_nonce', 'about_custom_field_nonce' );
	?>

	<?php
	$custom_field = get_post_meta( $post->ID, 'custom_field', true );
	?>
	<p>
		<label for="custom_field"><?php _e( 'Custom field', 'cde-theme' ); ?></label><br/> 
		<input type="text" name="custom_field" value="<?php echo esc_attr( $custom_field ); ?>" />
	</p>
	<?php
}

function about_custom_field_save( $post_id ) {

	if ( ! isset( $_POST['about_custom_field_nonce'] ) || ! wp_verify_nonce( $_POST['about_custom_field_nonce'], 'about_custom_field_nonce' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if ( ! isset( $_POST['custom_field'] ) ) {
		return;
	}

	update_post_meta( $post_id, 'custom_field', $_POST['custom_field'] );

}
function about_meta_box() {
	add_meta_box( 'about-custom-field', __( 'Custom field', 'cde-theme' ), 'about_metabox_callback', 'page' );
}
add_action( 'add_meta_boxes', 'about_meta_box' );
add_action( 'save_post', 'about_custom_field_save' );

