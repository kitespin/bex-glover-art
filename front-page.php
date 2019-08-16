<?php
/**
 * The template for displaying front page.
 *
 
 *
 * @package Blask
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'front' ); ?>


			<?php
					// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;
		?>


	<?php endwhile; // End of the loop. ?>


	<!--output of query result in functions.php-->
	<!--
	<h3>Todays posts</h3>
	<?php
	//while ( $result->have_posts() ) : $result->the_post();      
		?>
		<h4><?php //the_title(); ?></h4>
		<?php
	//endwhile; 
	//wp_reset_query();
	?>
-->
	<h4>Todays News</h4>
	<?php
	if ( $result->have_posts() ){
	$result->the_post();  
		?>
		<a href="<?php echo get_site_url()?>/news/" ><h5 style="color:orange;"><?php the_title(); ?></h5></a>
		<?php
	}else{
		echo "No posts";
	}
	
	wp_reset_query();
	?>



</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
