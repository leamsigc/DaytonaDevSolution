<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner footer__menu--container" >
					<nav class='menu'>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'footerLocationOne'
						)) 
						?>
					</nav>
					<nav class="menu">
							<?php
						wp_nav_menu(array(
							'theme_location' => 'footerLocationTwo'
						)) 
						?>
					</nav>
				</div>
			</footer>
<?php wp_footer(); ?>
</body>
</html>