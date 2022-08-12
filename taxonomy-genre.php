<?php
get_header();
?>
<main>
<?php

$current_term_query = get_query_var( 'term' );
$current_term       = get_term_by( 'slug', $current_term_query, 'genre' );
if ( have_posts() && isset( $current_term ) ) {
	?>
	<h2>List <?php echo esc_html( $current_term->name ); ?> Films</h2>
	<?php
	while ( have_posts() ) {
		the_post();
		$custom_field = get_post_meta( $post->ID, 'custom_field', true );
		?>
		<section>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
			<p><strong>Custom field: </strong><?php echo esc_html( $custom_field ); ?></p>
		</section>
		<?php
	}
	get_template_part( '/template-parts/pagination' );
}
?>
</main>

<?php
get_footer();

