<?php get_header() ?>
<div class="big-wrapper wrapper_category">
	<div class="wp_bread_crumb">
		<div class="bread_crumb">
			<div class="container">
				<h1 class="header">Tìm kiếm</h1>
				<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp;  <span>»</span> &nbsp; <span class="current-item">Tìm kiếm</span></div>
			</div>
		</div>
	</div>
	<div class="wp_category"> 
		<div class="container"> 
			<div class="row section-space"> 
				<div class="col-md-8">
					<div class="cate">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post();  ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="p1_wrap cate_page">
										<div class="p1_feat">
											<a class="p1_flink" href="<?php echo get_permalink() ?>">
												<img src="<?php the_post_thumbnail_url(); ?>" >
											</a>
										</div>
										<div class="p1_header">
											<p class="cate_entry_title">
												<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
											</p>
										</div>
										<?php the_excerpt(); ?>
										<div class="p1_footer">
											<i class="far fa-user"></i>
											<span class="meta_info_author txt_content"><?php echo get_the_author() ?></span>
											<span class="meta_info_date">
												<i class="far fa-clock"></i>
												<abbr class="date published txt_content">&nbsp;<?php echo get_the_date(); ?></abbr>
											</span>
										</div>
									</div>
								</div>
							<?php endwhile; else : ?>
						<?php endif; ?>
					</div>
					<div class="cate_posts_navi">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
						?>
					</div> 
				</div>
				<?php get_sidebar(); ?> 
			</div>
		</div> 
	</div> 
</div>
<?php get_footer() ?>