<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogSixteen
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-content">
			<div class="site-info" style="text-align:center"> Copyright © <?php echo date("Y") . " " . get_bloginfo('name', 'Display'); ?><br> 
				<?php 
					$locations = get_nav_menu_locations(); 
					if($locations[ 'footer-menu' ] !== 0) {
						$items = wp_get_nav_menu_items( wp_get_nav_menu_object( $locations[ 'footer-menu' ] )->term_id );
					} else {
						$items = false;
					}					

					if ($items !== false) {
						$count = count($items);
						foreach ( $items as $key => $item ) {
							echo ' <a href="'.$item->url.'">'.$item->title.'</a> ';
							if($key != $count - 1) {
								echo '-';
							}
						}
					}
				?>
			</div>
			<?php wp_footer(); ?>
		</div>

	</footer><!-- #colophon -->

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
