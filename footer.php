		<footer>
			<nav class="nav-footer">
			<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu($args)
				?>
			</nav>

			<p><?php bloginfo('name'); ?> © <?php echo date('Y'); ?>. Todos direitos reservados.</p>
		</footer>
    <?php wp_footer(); ?>
	</body>
</html>