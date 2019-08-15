<?php
/**
 * The template used for displaying page content in front-page.php
 *
 * @package Blask
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php
		//var dump to get the array of image sizes
		//var_dump(get_field ('home-main-logo'));;
		//custom field entry for logo
		if ( get_field( 'home-main-logo' ) ){  ?>
			<img src=" <?php echo get_field( 'home-main-logo' )["sizes"]["medium"]?>" > </img>
		<?php } ?>

	<div class="page-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'blask' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

