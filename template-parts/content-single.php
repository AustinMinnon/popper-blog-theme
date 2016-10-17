<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Popper-Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="entry-meta">
            <?php popper_blog_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content() ?>
            <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:',
                'after' => '</div>'
            ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php popper_blog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
