<?php
/**
 * Template Name: Open Badges Community Splash
 */

get_header(); 
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
}?>

<script type="text/javascript">
	$(document).ready(function(){
		// if url starts with a hash, animate scroll
		$('a[href*=#]').click(function(){

		    $('html, body').animate({
		        scrollTop: $( $(this).attr('href') ).offset().top
		    }, 500);
		    return false;
		})
	});
</script>
<?php get_footer();?>
