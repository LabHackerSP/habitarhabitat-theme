<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ultrabootstrap
 */

?>

		<!-- Tab to top scrolling -->
		<footer>
		<div class="container footers">
        <div class="row">
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
            <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
    </div>
		</footer>

	</div>
	</div>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/classie.js"></script>	
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/sideslide.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>

