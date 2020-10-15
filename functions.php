<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Functions
 * @package  MyPackage
 * @author    Nami Ueda
 */

?>
<?php
/**
 * Get the slug.
 * Return value is $slug.
 */
function the_slug() {
	$slug = '';
	if ( is_category() ) {
		// @todo カテゴリーアーカイブページが表示されている場合
		$category = get_the_category(); // @todo カテゴリーの情報を取得
		$slug     = $category[0]->category_nicename; // @todo カテゴリーのスラッグを取得
	} else {
		// @todo それ以外のページが表示されている場合
		$id   = get_the_ID(); // @todo ページのIDを取得
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

