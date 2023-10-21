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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-2">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur iure voluptates nobis ea quis,
					laudantium odio repudiandae aut corporis laboriosam?</p>
			</div>
			<div class="col-6">
				<header class="entry-header alignwide">
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
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
			<div class="col-4">
				<div class="color-recent-posts">
					<ul class="wp-block-latest-posts__list wp-block-latest-posts">
						<?php
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