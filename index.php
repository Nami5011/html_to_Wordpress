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
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
			<!--記事-->
			<article>
				<!--ページのタイトル-->
				<h2><?php the_title(); ?></h2>
				<!--ページの本文-->
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<!--//記事-->
					<?php
				endwhile;
			endif;
			?>
		</section>
		<!--//コンテンツエリア-->
<?php
get_footer();
?>
