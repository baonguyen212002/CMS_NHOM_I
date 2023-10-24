<?php
session_start();
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<style>
	body {
		background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
		font-family: 'Open Sans', sans-serif;
	}
</style>
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

<div class="row">
	<div class="col-md-3">
		<div class="navigation-button">
			<?php
			$post = get_post();
			$post_id = get_the_ID();
			?>
			<div class="navigation-button">
				<?php
				//Previous Post
				$post_prev = get_previous_post();
				$post_prev_id = $post_prev->ID;
				$post_prev_title = $post_prev->post_title;

				$post_content_prev = get_post_field('post_content', $post_prev_id);

				// Chỉ lấy ảnh trong the_content()
				$pattern = '/<img[^>]+src=["\']([^"\']+)["\']/';
				preg_match_all($pattern, $post_content_prev, $matches);

				if (!empty($matches[1])) {
					foreach ($matches[1] as $image_url) {
						$img_list_prev = '<img class="image-nav" src="' . esc_url($image_url) . '" /><br>';
					}
				}
				//Chỉ lấy nội dung chữ trong the_content()
				$plain_text_content_prev = substr(strip_tags($post_content_prev), 0, 100);

				previous_post_link('
					<div class="content-nav">
						<p class="post-title-nav">' . $post_prev_title . '</p>
						<hr class="boder-bottom-hr">
						' . $img_list_prev . '
						<p class="text-content">' . $plain_text_content_prev . '[...]</p>
					</div>
					'); ?>
				<div class="navigation-button">
					<?php
					//Next Post
					$post_next = get_next_post();
					$post_next_id = $post_next->ID;
					$post_next_title = $post_next->post_title;
					$post_content_next = get_post_field('post_content', $post_next_id);

					// Chỉ lấy ảnh trong the_content()
					$pattern = '/<img[^>]+src=["\']([^"\']+)["\']/';
					preg_match_all($pattern, $post_content_next, $matches);

					if (!empty($matches[1])) {
						foreach ($matches[1] as $image_url) {
							$img_list_next = '<img class="image-nav" src="' . esc_url($image_url) . '" /><br>';
						}
					}
					//Chỉ lấy nội dung chữ trong the_content()
					$plain_text_content_next = substr(strip_tags($post_content_next), 0, 100);

					next_post_link('
					<div class="content-nav">
						<p class="post-title-nav">' . $post_next_title . '</p>
						<hr class="boder-bottom-hr">
						' . $img_list_next . '
						<p class="text-content">' . $plain_text_content_next . '[...]</p>
					</div>
					'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="container">
			<?php if (have_posts()) { ?>
				<header class="page-header alignwide">
					<h1 class="page-title">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__('Results for "%s"', 'twentytwentyone'),
							'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
						);
						?>
					</h1>
				</header><!-- .page-header -->

				<div class="search-result-count default-max-width">
					<?php
					printf(
						esc_html(
							/* translators: %d: The number of search results. */
							_n(
								'We found %d result for your search.',
								'We found %d results for your search.',
								(int) $wp_query->found_posts,
								'twentytwentyone'
							)
						),
						(int) $wp_query->found_posts
					);
					?>
				</div><!-- .search-result-count -->
				
				<?php
				// Start the Loop.
				while (have_posts()) {
					the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part('template-parts/content/content-excerpt-search', get_post_format());

				} // End the loop.
			
				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

			// If no content, include the "No posts found" template.
		} else {
			get_template_part('template-parts/content/content-none');
		}


		?>
		</div>
	</div>
	<div class="col-md-3">
		<div class="container">
			<div class="row">
				<div class="media comment-box">
					<ol class="comment-list">
						<?php
						wp_list_comments(
							array(
								'avatar_size' => 60,
								'style' => 'ol',
								'short_ping' => true,
							)
						);
						?>
					</ol>
					<!-- .comment-list -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<h4>Latest News</h4>
							<ul class="timeline">
								<?php
									if(isset($_SESSION['latest-posts']))
										echo $_SESSION['latest-posts'];
								?>
							</ul>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
<?php get_footer(); ?>