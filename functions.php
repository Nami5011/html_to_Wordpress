<?php 
function the_slug() {
	$slug = '';
	// @todo カテゴリーアーカイブページが表示されている場合
	if ( is_category() ) {
		$category = get_the_category(); // @todo カテゴリーの情報を取得
		$slug = $category[0]->category_nicename; // @todo カテゴリーのスラッグを取得
	}
	// @todo それ以外のページが表示されている場合
	else {
		$id = get_the_ID(); // @todo ページのIDを取得
		$page = get_post( $id ); // @todo IDに該当するページの情報を取得
		$slug = $page->post_name; // @todo ページのスラッグを取得
	}
	// @todo スラッグを出力する
	echo $slug;
}
$params = array(
	'global_nav' => 'グローバルナビゲーション',
	'footer_nav' => 'フッターナビゲーション',
);
register_nav_menus( $params );
?>