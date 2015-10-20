<?php
/**
 * @package Invenio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>

	<div class="grid-item-inner">
		
		<?php if ( has_post_thumbnail() ) :
			$image_id = get_post_thumbnail_id();
			$url = wp_get_attachment_image_src( $image_id, 'ostentus-large' );
		?>
		<figure class="entry-image">
			<a class="entry-permalink" href="<?php echo esc_url( get_permalink() ); ?>"><img src="<?php echo esc_attr( $url[0] ); ?>"></a>
		</figure><!-- .section-image -->
		<?php endif; ?>
		
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

		<footer>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php invenio_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer>

	</div>
	
</article><!-- #post-## -->