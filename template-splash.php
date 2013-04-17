<?php
/**
 * Template Name: Open Badges Community Splash
 */
get_header(); ?>
<div role="main">
	<section class="content" id="main">
		<div class="constrained">
			<h1>Contribute to the Open Badges ecosystem.
Join the Open Badges movement.</h1>

			<nav class="splashnav">
				<a class="learn scroll" href="#learn">Learn<span></span></a>
				<a class="design scroll" href="#design">Design<span></span></a>
				<a class="code scroll" href="#code">Code<span></span></a>
			</nav>
		</div> <!-- .constrained -->
	</section> <!-- #content -->

	<section class="content" id="learn">
		<div class="constrained">
			<h2>Learn</h2>
			<p class="subheading">Curious about recognition of skills &amp; interests? 
You're in the right place. Welcome.</p>

			<ul class="links">
				<li><a href="#">Learn more about Open Badges<span></span></a></li>
				<li><a href="#">Participate in the learning group<span></span></a></li>
				<li><a href="#">Join upcoming events<span></span></a></li>
			</ul>

			<div class="events">
				Some events go here
			</div><!-- .events -->

		</div> <!-- .constrained -->
	</section> <!-- #content -->

	<section class="content" id="design">
		<div class="constrained">
			<h2>Design</h2>
			<p class="subheading">Discover &amp; share information about 
badge system creation.</p>

			<ul class="links">
				<li><a href="#">Visit the Google learning group<span></span></a></li>
				<li><a href="#">Learn about issuing badges<span></span></a></li>
				<li><a href="#">Try visual design exercises<span></span></a></li>
			</ul>

			<div class="video">
				video go here
			</div><!-- .video -->
		</div> <!-- .constrained -->
	</section> <!-- #content -->

	<section class="content" id="code">
		<div class="constrained">
			<h2>Code</h2>
			<p class="subheading">Access development documentation 
&amp; contribute to Open Badges.</p>

			<ul class="links">
				<li><a href="#">Visit the developers group<span></span></a></li>
				<li><a href="#">Review onboarding documents<span></span></a></li>
				<li><a href="#">Get the Contribute code<span></span></a></li>
				<li><a href="#">See metadata specification<span></span></a></li>
				<li><a href="#">Use the Issuer API<span></span></a></li>
				<li><a href="#">Explore the Displayer API<span></span></a></li>
			</ul>

			<div class="column50">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit justo sed orci luctus pharetra. Suspendisse potenti. Etiam pretium mauris enim, nec scelerisque risus. Vivamus accumsan fringilla ornare. Donec scelerisque sagittis arcu, et dignissim dolor rutrum sit amet. Proin congue felis vel neque volutpat eu consequat lectus tristique. Nullam lacinia consectetur tempus. Proin sed placerat diam. Suspendisse at erat vitae mauris lobortis viverra vitae vitae lectus. Vestibulum tempor metus vitae libero ornare eleifend. Nam fringilla, est quis congue cursus, augue nisl mollis lectus, a tincidunt sapien.</p>
			</div><!-- .column50 -->
			<div class="column50">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit justo sed orci luctus pharetra. Suspendisse potenti. Etiam pretium mauris enim, nec scelerisque risus. Vivamus accumsan fringilla ornare. Donec scelerisque sagittis arcu, et dignissim dolor rutrum sit amet. Proin congue felis vel neque volutpat eu consequat lectus tristique. Nullam lacinia consectetur tempus. Proin sed placerat diam. Suspendisse at erat vitae mauris lobortis viverra vitae vitae lectus. Vestibulum tempor metus vitae libero ornare eleifend. Nam fringilla, est quis congue cursus, augue nisl mollis lectus, a tincidunt sapien.</p>
			</div><!-- .column50 -->
		</div> <!-- .constrained -->
	</section> <!-- #content -->

	<section class="content" id="news">
		<div class="constrained">
			<h2>News</h2>
			<p class="subheading">See the latest updates
on the Mozilla Open Badges Blog.</p>
			<div class="blog">
				<?php RSSImport(10, 'http://openbadges.tumblr.com/rss'); ?>
			</div><!-- .blog -->
		</div> <!-- .constrained -->
	</section> <!-- #content -->
</div><!-- end role main -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
