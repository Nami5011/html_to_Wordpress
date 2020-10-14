<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="サンプルマーケティングの公式企業サイトです。サンプルマーケティングの事業内容、会社概要、個人情報保護の取り組みなどを掲載しています。">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

	<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.svg' ); ?>" alt="">

	<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/wp-content/themes/sample_marketing' ); ?>/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/wp-content/themes/sample_marketing' ); ?>/reset.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri( '/wp-content/themes/sample_marketing' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body id="<?php the_slug(); ?>" <?php body_class(); ?>>

	<!-- ページ全体の囲み枠 -->
	<div id="wrapper">

		<!-- ロゴマーク -->
		<header>
			<h1>サンプルマーケティング | 海外輸入とインターネット通販でお客様に幸せをお届けします。</h1>
			<div id="header-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri( '/wp-content/themes/sample_marketing' ) ); ?>/header_logo.png" alt="サンプルマーケティング株式会社"></a>
			</div>
		</header>

		<!-- グローバルナビゲーション -->
		<?php
		$param = array(
			'container' => 'nav',
			'container_id' => 'gNav',
			'theme_location' => 'global_nav',
		);
		wp_nav_menu( $param );
		?>
		<!-- 
		<nav id="gNav">
			<ul>
				<li class="current-menu-item"><a href="index.html">ホーム</a></li>
				<li><a href="business.html">事業内容</a></li>
				<li><a href="about.html">会社概要</a></li>
				<li><a href="contact.html">お問い合わせ</a></li>
			</ul>
		</nav> -->
