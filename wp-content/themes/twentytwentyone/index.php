<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>
<div class="container">
	<div class="row">
	<div class="col-md-3">
		<!-- .Archive -->

<div class="box-category box-xemnhieu">
                    <hgroup class="width_common title-box-category">
                        <h3 class="parent-cate active">Xem nhiều</a></h3>
                    </hgroup>
					<div class="width_common list-top-view">
<div id="dv1">
<article class="item-news">
	<h2><span class="sidebar-ben-trai">1</span></h2>
	<h3 class="title-news"><a href="http://localhost:8080/wordpress/2023/10/21/audi-q7-2021/" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop" title="Audi Q7 2021" data-itm-added="1">Audi Q7 2021</a>
	<span class="meta-news">
<a class="count_cmt" href="http://localhost:8080/wordpress/2023/10/21/audi-q7-2021/" style="white-space: nowrap;display: none;">
</a>
	</span>
	</h3>
</article>
</div>
<div id="dv2">
<article class="item-news">
<h2><span class="sidebar-ben-trai">2</span></h2>
	<h3 class="title-news"><a href="http://localhost:8080/wordpress/2023/10/20/kane-lap-cu-dup-giup-anh-ha-italy/" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop"title="Kane lập cú đúp, giúp Anh hạ Italy" data-itm-added="1">Kane lập cú đúp, giúp Anh hạ Italy</a>
	<span class="meta-news">
<a class="count_cmt" href="http://localhost:8080/wordpress/2023/10/20/kane-lap-cu-dup-giup-anh-ha-italy/" style="white-space: nowrap; display: inline-block;">
</a>
	</span>
	</h3>
</article>
</div>
<div id="dv3">
<article class="item-news">
<h2><span class="sidebar-ben-trai">3</span></h2>
	<h3 class="title-news"><a href="http://localhost:8080/wordpress/2023/10/20/messi-lap-cu-dup-argentina-xay-cao-dinh-bang/" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop" title="Messi lập cú đúp, Argentina xây cao đỉnh bảng" data-itm-added="1">Messi lập cú đúp, Argentina xây cao đỉnh bảng</a>
	<span class="meta-news">

<a class="count_cmt" href="http://localhost:8080/wordpress/2023/10/20/messi-lap-cu-dup-argentina-xay-cao-dinh-bang/" style="white-space: nowrap; display: inline-block;">
</a>
</span>
	</h3>
</article>
</div>
<div id="dv4">
<article class="item-news">
<h2><span class="sidebar-ben-trai">4</span></h2>
	<h3 class="title-news"><a href="http://localhost:8080/wordpress/2023/10/20/berbatov-ronaldo-chi-dung-lai-khi-cau-ay-muon/"  data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop"title="Berbatov: ‘Ronaldo chỉ dừng lại khi cậu ấy muốn’'" data-itm-added="1">Berbatov: ‘Ronaldo chỉ dừng lại khi cậu ấy muốn’ 'nhà đầu tư chủ quan'</a>
	<span class="meta-news">

<a class="count_cmt" href="http://localhost:8080/wordpress/2023/10/20/berbatov-ronaldo-chi-dung-lai-khi-cau-ay-muon/" style="white-space: nowrap; display: inline-block;">
</a>
	</span>
	</h3>
</article>
</div>
<div id="dv5">
<article class="item-news">
<h2><span class="sidebar-ben-trai">5</span></h2>
	<h3 class="title-news"><a href="http://localhost:8080/wordpress/2023/10/18/hello-world/"  data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop"title="Berbatov: ‘Neymar chấn thương trong trận thua của Brazil’'" data-itm-added="1">Berbatov: ‘Neymar chấn thương trong trận thua của Brazil'</a>
	<span class="meta-news">

<a class="count_cmt" href="http://localhost:8080/wordpress/2023/10/18/hello-world/" style="white-space: nowrap; display: inline-block;">
</a>
	</span>
	</h3>
</article>
</div>

                    </div>

				</div>
	</div>
		<div class="col-md-6">
		<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				}

				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

			} else {

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content-none' );

			}
		?>

		</div>

		<div class="col-md-3"><?php get_template_part('sidebar','modul-13') ?></div>

	</div>
</div>
<?php

get_footer();
?>