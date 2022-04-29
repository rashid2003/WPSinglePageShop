<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package shopstar
 */

?>

		</div>
	</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div class="widgets">
        <div class="container">
        	<div class="padder">
        	
	            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'footer' ); ?>
	            </ul>
	    		<?php endif; ?>
	            
	            <div class="clearboth"></div>
			
			</div>
        </div>
    </div>
	
	<div class="bottom-bar">
	
		<div class="container">
			<div class="padder">
				<ul>
					<li style="width: 50%; text-align: left;">Copyright @ 2017 Cloth-store. All Rights Reserved</li>

					<li style="width: 50%; text-align: right;">Designed by Solwin infotech</li>
				</ul>
			</div>
		</div>
		
        <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>
	
</body>
</html>