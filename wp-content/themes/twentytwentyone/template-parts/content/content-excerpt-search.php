<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="list_new_view">
	<div class="row">
			<div class="col-md-5">
				<div class="top_news_block_thumb">
				<?php if (
					! twenty_twenty_one_can_show_post_thumbnail() &&
					has_block( 'core/image', get_the_content() )
					) {
					
						twenty_twenty_one_print_first_instance_of_block( 'core/image', get_the_content() );
					} ?>
				</div>
			</div>
			<div class="col-md-7 top_news_block_desc">
				<div class=row>
					<div class="col-md-3 col-xs-3 topnewstime">
					<?php
					$post_day = get_the_date('d', $post->ID );
					$post_month = get_the_date('m', $post->ID );
					?>
					<span class="topnewsdate"><?php echo $post_day ?></span>
					<br/>
					<span class="topnewsmonth">Tháng <?php echo $post_month ?></span>
					</div>
					<div class="col-md-9 col-xs-9 shortdesc">
						<?php get_template_part( 'template-parts/header/excerpt-search', get_post_format() ); ?>
						<div class="entry-content">
							<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
						</div><!-- .entry-content -->
					</div>
				</div>
			</div>
	</div>

</article><!-- #post-${ID} -->
