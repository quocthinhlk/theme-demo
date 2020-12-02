<?php get_header(); ?>
<div class="single_post">
	<div class="wp_bread_crumb">
		<div class="bread_crumb">
			<div class="container">
				<h1 class="header"><?php the_title(); ?></h1>
				<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp;  <span>»</span> &nbsp; <span class="current-item"><?php the_title(); ?></span></div>
			</div>
		</div>
	</div>
	<div class="wp_single">
		<div class="container"> 
			<div class="row section-space wp-section-space single_post_detail">
				<div class="col-md-8">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<article class="blog-post">
								<img src="<?php the_post_thumbnail_url(); ?>">
								<div class="blog-post-content"> 
									<p><?php the_content() ?></p>   
								</div> 
							</article> 
						<?php endwhile; else : ?>
						<p>Đang cập nhật</p>
					<?php endif; ?>

					<section class="same_post">
						<div class="container">
							<div class="block_header">
								<h2 class="block_title">BÀI VIẾT CÙNG CHUYÊN MỤC</h2>
							</div>
							<div class="row">
								<?php
								/*
								 * Hiển thị bài viết liên quan trong cùng 1 category
								 */
								$categories = get_the_category(get_the_ID());
								if ($categories){
								    $category_ids = array();
								    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								    $args=array(
								        'category__in' => $category_ids,
								        'post__not_in' => array(get_the_ID()),
								        'posts_per_page' => 3,
								    );
								    $my_query = new wp_query($args);
								    if( $my_query->have_posts() ):
								        while ($my_query->have_posts()):$my_query->the_post();
								            ?>
								            <div class="col-md-4 col-sm-4 col-xs-12">
												<div class="p1_wrap relate_post">
													<div class="p1_feat">
														<a class="p1_flink" href="<?php echo get_permalink() ?>">
															<img src="<?php the_post_thumbnail_url(); ?>"  alt="<?php the_title(); ?>">
														</a>
													</div>
													<div class="p1_header">
														<p class="p1_entry_title relate_post_title">
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
								            <?php
								        endwhile;
								    endif; wp_reset_query();
								}
								?>
							</div>
						</div>
					</section>
				</div>
				<?php get_sidebar(); ?>
			</div> 
		</div> 
	</div>
</div>
<?php get_footer(); ?>