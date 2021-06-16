<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package online_cv_resume
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class( array('col-md-12','entry-single-content-wrp') ); ?>>

   
		<?php
			/**
			* Hook - online_cv_resume_posts_blog_media.
			*
			* @hooked online_cv_resume_posts_blog_media - 10
			* @hooked online_cv_resume_posts_blog_media - 20
			* @hooked online_cv_resume_posts_blog_loop_title - 20
			*/
			do_action( 'online_cv_resume_posts_blog_media' );
        ?>
    	<div class="entry-content blog-details">
       <?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'online-cv-resume' ),
			'after'  => '</div>',
		) );
		?>
        </div>
</div>
<!-- #post-<?php the_ID(); ?> -->
