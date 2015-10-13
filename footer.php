<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Invenio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <ul class="site-info">
            <li class="cms-info"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'invenio' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'invenio' ), 'WordPress' ); ?></a></li>
            <li class="theme-info"><a href="http://thefivethemes.com"><?php printf( __( 'Theme: %1$s by %2$s for %3$s', 'invenio' ), 'Invenio', 'Hugo Baeta', 'The Five Themes' ); ?></a></li>            
        </ul><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
