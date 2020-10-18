<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Header
 * @package  MyPackage
 * @author    Nami Ueda
 */

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="サンプルマーケティングの公式企業サイトです。サンプルマーケティングの事業内容、会社概要、個人情報保護の取り組みなどを掲載しています。">

	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/wp-content/themes/sample_marketing' ); ?>/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/wp-content/themes/sample_marketing' ); ?>/reset.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri( '/wp-content/themes/sample_marketing/style.css' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body id="<?php the_slug(); ?>" <?php body_class(); ?>>

	<!-- ページ全体の囲み枠 -->
	<div id="wrapper">

		<!-- ロゴマーク -->
		<header>
			<h1>サンプルマーケティング | 海外輸入とインターネット通販でお客様に幸せをお届けします。</h1>
			<div id="header-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/img/header_logo.png" alt="サンプルマーケティング株式会社"></a>
			</div>
		</header>

		<!-- グローバルナビゲーション -->
		<?php
		$param = array(
			'container'      => 'nav',
			'container_id'   => 'gNav',
			'theme_location' => 'global_nav', // @todo function.phpで定義したglobal_navと連動
		);
		wp_nav_menu( $param );
		?>
