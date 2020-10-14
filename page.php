<?php get_header(); ?>
		<!-- コンテンツエリア -->
		<section id="contents">
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
		</section>
		<!--//コンテンツエリア-->
<?php
get_footer();
?>
