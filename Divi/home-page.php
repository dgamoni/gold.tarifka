<?php
/*
Template Name: Home + left sidebar
*/

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">


<?php 
// global $post;
//  var_dump($post->post_content);
 // $pieces = explode("[", $post->post_content);
//$pieces = split("[", $post->post_content);
 //var_dump( $pieces);

 //var_dump(get_the_ID());
//var_dump(get_post_meta( $post->ID, '_et_pb_use_builder', true ) );
 //var_dump(get_post_custom($post->ID));
 ?> 

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



					<div class="entry-content">
					<?php

						the_content();

						if ( ! $is_page_builder_used )
							wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>
					</div> <!-- .entry-content -->

				<?php
					if ( ! $is_page_builder_used && comments_open() && 'on' === et_get_option( 'divi_show_pagescomments', 'false' ) ) comments_template( '', true );
				?>

				</article> <!-- .et_pb_post -->

			<?php endwhile; ?>



</div> <!-- #main-content -->

<?php get_footer(); ?> 