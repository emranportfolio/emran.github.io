<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PortfolioX
 */
$portfoliox_categories = get_the_category();
	if($portfoliox_categories){
		$portfoliox_category = $portfoliox_categories[mt_rand(0,count( $portfoliox_categories)-1)];
	}else{
		$portfoliox_category = '';
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('portfoliox-list-item'); ?>>
	<div class="portfoliox-item portfoliox-text-list shadow-sm mb-5 <?php if(has_post_thumbnail( )): ?>has-thumbnail<?php endif; ?>">
	<div class="row">
		<?php if(has_post_thumbnail( )): ?>
		<div class="col-lg-6">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium_large'); ?>
			</a>
		</div>
		<div class="col-lg-6">
		<?php else: ?>
			<div class="col-lg-12 pb-3 pt-3">
		<?php endif; ?>
			<div class="portfoliox-text text-center p-3">
				<div class="portfoliox-text-inner">
					<div class="grid-head">
						<span class="ghead-meta list-meta">
							<?php if ( 'post' === get_post_type() && !empty($portfoliox_category) ) : ?>
							<a href="<?php echo esc_url(get_category_link($portfoliox_category)); ?>"><?php echo esc_html($portfoliox_category->name.' / '); ?></a>
							<?php endif; ?>
							<?php echo esc_html( get_the_date()); ?>
						</span>
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<?php if ( 'post' === get_post_type() ) :
					?>
					<div class="list-meta list-author">
					<?php portfoliox_posted_by(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
					</div>
					<a class="portfoliox-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More ','portfoliox'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</div>
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->