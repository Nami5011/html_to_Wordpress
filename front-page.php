<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Page
 * @package  MyPackage
 * @author    Nami Ueda
 */

?>
<?php get_header(); ?>

		<!-- コンテンツエリア -->
		<section id="contents">

			<!--メイン画像-->
			<img id="main_visual" class="inner" src="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/img/main_visual.jpg" alt="サンプルマーケティング">

			<!--お知らせ-->
			<h2>Information</h2>
			<div class="inner">
				<ul id="infolist">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
					<li>
							<?php
							if ( has_post_thumbnail() ) {
								?>
							<div class="thumb"><?php has_post_thumbnail(); ?></div>
							<?php } ?>
						<div class="date"><?php the_time( 'Y/m/d' ); ?></div>
						<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<?php edit_post_link(); ?>
					</li>
							<?php
						endwhile;
					endif;
					?>
				</ul>
			</div>

			<!--事業内容-->
			<h2>サンプルマーケティングの事業内容</h2>
			<div id="our-business" class="inner">
				<div class="biz-box col-4">
					<h3>海外輸入小売事業</h3>
					<a href="business.html"><img class="photoframe" src="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/img/import.jpg" alt="海外輸入小売事業"></a>
				</div>
				<div class="biz-box col-4">
					<h3>インターネット通販事業</h3>
					<a href="business.html"><img class="photoframe" src="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/img/webshop.jpg" alt="インターネット通販事業"></a>
				</div>
				<div class="biz-box col-4">
					<h3>コンサルティング事業</h3>
					<a href="business.html"><img class="photoframe" src="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/img/consulting.jpg" alt="コンサルティング事業"></a>
				</div>
			</div>
		</section>
		<!-- //コンテンツエリア -->

<?php
get_footer();
?>
