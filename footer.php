<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Infrastrukt for WordPress
 * @since Infrastrukt for WordPress 1.0
 */
?>

<!-- Footer -->
<footer class="row">

	<div class="large-12 columns">
		<p class="">&copy; <?php echo date('Y'); ?> Copyright <?php echo get_bloginfo(); ?>
        <ul class="inline-list">
        <?php wp_list_pages('title_li='); ?>
        </ul>
	</div>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>