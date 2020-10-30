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

	<!-- ページ全体の囲み枠 -->
	<div id="wrapper">

		<!-- ロゴマーク -->
		<header>
			<h1>サンプルマーケティング | 海外輸入とインターネット通販でお客様に幸せをお届けします。</h1>
			<div id="header-logo">
				<a href="index.html"><img src="img/header_logo.png" alt="サンプルマーケティング株式会社"></a>
			</div>
		</header>

		<!-- コンテンツエリア -->
		<section id="contents">
			<!--ページのタイトル-->
			<h2>お探しのページが見つかりませんでした。</h2>
			<!--ページの本文-->
			<a class="readmore" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
		</section>
		<!--//コンテンツエリア-->

		<?php
		get_footer();
		?>
