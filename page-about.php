<?php
	get_header();
?>
<main>
	<h2>About page</h2>
	<?php
	if ( have_posts() ) :
		the_post();
		the_content();
		$custom_field = get_post_meta( $post->ID, 'custom_field', true );
		?>
		<p><strong>Custom field: </strong><?php echo esc_html( $custom_field ); ?></p>
		<?php
	endif;
	?>
</main>

<?php
get_footer();
