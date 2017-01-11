<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ultrabootstrap
 */

?>
	</div>
	</div>

		<!-- Tab to top scrolling -->
	<footer>
	<div class="footers">
        <div class="row">
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
            <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
    </div>
	</footer>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/classie.js"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/sideslide.js"></script>
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
	$.ajax({
	  context: this,
	  success: function(json) {}
	});
	$(document).ready(function(){
	  $("a.leia-mais").click(function(){
	  	$(this).find("i.glyphicon").toggleClass("glyphicon-triangle-bottom").toggleClass("glyphicon-triangle-top");
	  	$(this).parent("#description_txt").toggleClass("active");
	  });
	  $("#header li").click(function(){
	  	$("this div.well").toggleClass("active");
	  	$(this).siblings("li").removeClass("active");
	    $(".collapse.fade").removeClass("in");
	  });
	});
	</script>
</body>
</html>

