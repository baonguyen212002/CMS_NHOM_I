<?php
session_start();
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
		<div class="box-category box-xemnhieu">
                    <hgroup class="width_common title-box-category">
					<h5 class="xemnhieu">Xem nhiều</h5>
                    <div class="width_common list-top-view">
                            <?php 
                            $post_link = get_permalink(); 
                            
                            $temp = 0 ; ?>                          
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                 
                    <?php $temp  = $temp + 1;
                       $post_link = get_permalink(); 
                    ?>

                        <article class="item-news">
                            <span class="number-top-view"><?php echo $temp ?></span>
                            <h3 class="title-news"><a href="<?php echo $post_link  ?>" data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=0" title="Hiện trạng gần 150 căn nhà sai phép bị tháo dỡ ở TP HCM" data-itm-added="1"><?php the_title(); ?> </a>
                            <span class="meta-news">
                          
                            <a class="count_cmt" href="<?php echo $post_link  ?>" style="white-space: nowrap; display: inline-block;">
                                <svg class="ic ic-comment"><use xlink:href="#Comment-Reg"></use></svg>
                            
                            </a>
                            
                                    </span>
                             </h3>
                        </article>

                        <?php endwhile;?>
                    <?php endif; ?>
        
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
			}?>
		</div>
		<div class="col-md-3 recent_comments">
				<p class = "comment">Comments</p>
				<?php
				$args = array(
					'number'     =>3,
					'status'     =>'approve',
					'order'      =>'DESC',
					'orderby'    =>'comment_date',
				);
				$latest_comments = get_comments($args);
				if ($latest_comments) {
					foreach ($latest_comments as $comment ) {
						$comment_post_id = $comment->comment_post_ID;
						$comment_post_url = get_permalink($comment_post_id);
						echo '<div class="comment">';
						echo'<p class="comment-content"><a href="' . $comment_post_url  . '">' . $comment->comment_content . '</a></p>';
						echo '</div>';
					}
				}else {
					echo 'khong co comment nao';
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();