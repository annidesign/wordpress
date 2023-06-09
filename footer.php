<?php
	/* The footer widget area is triggered if any of the areas 
* have widgets. So let's check that first. 
* 
* If none of the sidebars have widgets, then let's bail early. 
*/
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return;
	//end of all sidebar checks. 
	
    ?>
		<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
<?php wp_footer(); ?>

</body>
</html>
