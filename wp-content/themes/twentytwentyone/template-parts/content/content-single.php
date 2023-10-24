<?php
session_start();
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>

	<style>
		body{
			/* background-color: red; */
			background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
		}
		.h7
		{
			font-size: 0.9rem
		}
	</style>
	<?php 
		$post_day = get_the_date('d', $post->ID );
		$post_month = get_the_date('m', $post->ID );
		$post_year = get_the_date('y', $post->ID );
	?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-xl">
		<div class="row">
			<div class="col-md-3">
				<div class="content-cate"><h2>Categories</h2></div>
					<div class="class-backgound"></div>
						<div class="border-top">
						<ul class="category-list">
							<?php
								wp_list_categories('title_li=');
							?>
						</ul>
					</div>
				</div>
			<div class="col-6">
				<header class="entry-header alignwide linebinh">
				<div class="row" style="margin-left:5px">
				<?php the_title( '<h1 class="col-md-10 col-xs-9 entry-title titlebinh">', '</h1>' ); ?>
					<div class="col-md-2 col-xs-3 ">
						<div class="binhdraw">
							<div class="calender-binh">
								<div class="day-binh"><?php echo $post_day ?></div>
								<div class="month-binh"><?php echo $post_month ?></div>
							</div>
							<div class="year-binh">'<?php echo $post_year ?></div>
						</div>
					</div>
					
				</div>
					<?php twenty_twenty_one_post_thumbnail(); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
							'after' => '</nav>',
							/* translators: %: Page number. */
							'pagelink' => esc_html__('Page %', 'twentytwentyone'),
						)
					);
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer default-max-width">
					<?php twenty_twenty_one_entry_meta_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
			<div class="col-3">
				<div class="color-recent-posts">
					<ul class="wp-block-latest-posts__list wp-block-latest-posts">
						
						<?php
							if(isset($_SESSION['recent-posts']))
								echo $_SESSION['recent-posts'];
							?>
					</ul>
					<button class="btn-recent-post"><span class="view-posts">XEM TẤT CẢ</span></button>
				</div>
			</div>
		</div>
	</div>
	<?php if (!is_singular('attachment')): ?>
		<?php get_template_part('template-parts/post/author-bio'); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->