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
			<img id="main_visual" class="inner" src="img/main_visual.jpg" alt="サンプルマーケティング">

			<!--お知らせ-->
			<h2>Information</h2>
			<div class="inner">
				<ul id="infolist">
					<li>
						<div class="thumb"><img src="img/import.jpg" alt=""></div>
						<div class="date">2016/10/15</div>
						<div class="title"><a href="news20161015.html">取り扱い商品数が10000種類を超えました。</a></div>
					</li>
					<li>
						<div class="thumb"><img src="img/webshop.jpg" alt=""></div>
						<div class="date">2016/09/10</div>
						<div class="title"><a href="news20160910.html">国内大手Eストアにて売上3位を獲得しました。</a></div>
					</li>
					<li>
						<div class="thumb"><img src="img/consulting.jpg" alt=""></div>
						<div class="date">2016/06/03</div>
						<div class="title"><a href="news20160603.html">コンサルティング契約社数が10社を超えました。</a></div>
					</li>
					<li>
						<div class="thumb"><img src="img/import.jpg" alt=""></div>
						<div class="date">2016/02/02</div>
						<div class="title"><a href="news20160202.html">当社オリジナルブランド商品の企画をスタートしました。</a></div>
					</li>
					<li>
						<div class="thumb"><img src="img/webshop.jpg" alt=""></div>
						<div class="date">2016/01/10</div>
						<div class="title"><a href="news20160110.html">ホームページをリニューアルしました。</a></div>
					</li>
				</ul>
			</div>

			<!--事業内容-->
			<h2>サンプルマーケティングの事業内容</h2>
			<div id="our-business" class="inner">
				<div class="biz-box col-4">
					<h3>海外輸入小売事業</h3>
					<a href="business.html"><img class="photoframe" src="img/import.jpg" alt="海外輸入小売事業"></a>
				</div>
				<div class="biz-box col-4">
					<h3>インターネット通販事業</h3>
					<a href="business.html"><img class="photoframe" src="img/webshop.jpg" alt="インターネット通販事業"></a>
				</div>
				<div class="biz-box col-4">
					<h3>コンサルティング事業</h3>
					<a href="business.html"><img class="photoframe" src="img/consulting.jpg" alt="コンサルティング事業"></a>
				</div>
			</div>
		</section>
		<!-- //コンテンツエリア -->

<?php
get_footer();
?>
