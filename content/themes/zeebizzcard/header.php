<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<title><?php wp_title('|', true, 'right'); ?></title>

<?php wp_head(); ?>

	<!-- Added specialty scripts -- for added functionality! -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	
	<script>
	$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	});
	</script>

	<script src="http://stickyjs.com/jquery.sticky.js"></script>
	
	<script>
		$(document).ready(function(){
			$("#sidewrap").sticky({topSpacing:15});
		});
	</script>

</head>

<body <?php body_class(); ?>>
	<div id="main">
<?php themezee_wrapper_before(); // hook before #wrapper ?>
<div id="wrapper">
	
	<div id="wrap">
		<div id="contentwrap">
		
			<div id="navi">
				<?php 
				// Get Main Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'main_navi', 'container' => false, 'menu_id' => 'nav', 'echo' => true, 'fallback_cb' => 'themezee_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
				?>
			</div>
			<div class="clear"></div>