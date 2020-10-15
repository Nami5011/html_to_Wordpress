<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Footer
 * @package  MyPackage
 * @author    Nami Ueda
 */

?>
<!-- フッターエリア -->
		<footer>
			<?php
			$param = array(
				'container'      => 'nav',
				'container_id'   => 'fNav',
				'theme_location' => 'footer_nav', // @todo function.phpで定義したfooter_navと連動
			);
			wp_nav_menu( $param );
			?>
			<small id="copyright">Copyright (c) 2016 Sample Marketing.inc. All Rights Reserved.</small>
		</footer>
		</div>
		<?php wp_footer(); ?>
		</body>

		</html>
