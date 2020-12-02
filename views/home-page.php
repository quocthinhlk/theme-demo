<?php
/**
 * template name: Trang chủ
 */
?>

<?php get_header(); ?>

<main>
	<section class="nav_slider">
		<div class="slider owl-carousel owl-loaded owl-drag">
			<?php
			if( have_rows('slider') ):
			    while( have_rows('slider') ) : the_row();
			        $image 	= get_sub_field('slider_image');
			        $title 	= get_sub_field('slider_title');
			        $url 	= get_sub_field('slider_url');
			        ?>
			        <div class="slide_item" style="background-image: url(<?php echo $image['url']; ?>);">
						<div class="s_header">
							<h2 class="s_header_title">
								<a class="s_header_url" href="<?php echo $url; ?>"><?php echo $title; ?></a>
							</h2>
						</div>
					</div>
			    <?php endwhile;
			endif;
			?>
		</div>
	</section>
	<section class="section_1">
		<div class="container">
			<div class="block_header">
				<h2 class="block_title">Bí quyết làm đẹp</h2>
			</div>
			<div class="row">
				<?php $args = array(
					'post_type' => 'post',
					'posts_per_page'  =>  3,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'bi-quyet-lam-dep',
						),
					),
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="p1_wrap">
								<div class="p1_feat">
									<a class="p1_flink" href="<?php echo get_permalink() ?>">
										<img src="<?php the_post_thumbnail_url(); ?>" >
									</a>
								</div>
								<div class="p1_header">
									<p class="p1_entry_title">
										<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
									</p>
								</div>
								<p class="entry-summary txt_content"><?php the_excerpt(); ?></p>
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
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="section_2">
			<div class="container">
				<div class="block_header">
					<h2 class="block_title">ĐỊA CHỈ LÀM ĐẸP</h2>
				</div>
				<div class="row">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'dia-chi-lam-dep',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count =0;
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<?php
							if($count == 1){ ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="p2_left">
										<div class="p2_left_top">
											<div class="p2_feat" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												<a href="<?php echo get_permalink() ?>" class="p2_feat_content_title"> 
													<div class="content">
														<div class="inner">
															<p class="title"><?php the_title(); ?></p>
														</div>
													</div>
												</a>
											</div>
										<?php }else if($count == 2){ ?>
											<div class="p2_feat" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												<a href="<?php echo get_permalink() ?>" class="p2_feat_content_title"> 
													<div class="content">
														<div class="inner">
															<p class="title"><?php the_title(); ?></p>
														</div>
													</div>
												</a>
											</div>
										</div>
									<?php }else if($count == 3){ ?>
										<div class="p2_left_bottom">
											<div class="p2_feat" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												<a href="<?php echo get_permalink() ?>" class="p2_feat_content_title"> 
													<div class="content">
														<div class="inner">
															<p class="title"><?php the_title(); ?></p>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php }else if($count == 4){ ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="p2_right">
										<div class="p2_feat" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
											<a href="<?php echo get_permalink() ?>" class="p2_feat_content"> 
												<div class="content">
													<div class="inner">
														<p class="title"><?php the_title(); ?></p>
														<div class="p2_right_description">
															<p class="description">
																<i class="far fa-user"></i>
																<span class="meta_info_author"><?php echo get_the_author() ?></span>
																<span class="meta_info_date">
																	<i class="far fa-clock"></i>
																	<abbr class="date published">&nbsp;<?php echo get_the_date(); ?></abbr>
																</span>
															</p>
															<p class="p2_read_more">Xem thêm <span><i class="fas fa-arrow-right"></i></span></p>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							<?php }
							?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="section_3">
			<div class="container">
				<div class="block_header">
					<h2 class="block_title">TÂM SỰ</h2>
				</div>
				<div class="row">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'tam-su',
							),
						),
					);
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="p3_wrap">
									<div class="p3_feat">
										<a class="p3_flink" href="<?php echo get_permalink() ?>">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="p3_text">
										<div class="p1_header">
											<p class="p1_entry_title">
												<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
											</p>
										</div>
										<?php the_excerpt(); ?>
										<div class="p1_footer">
											<i class="far fa-user"></i>
											<span class="meta_info_author"><?php echo get_the_author() ?></span>
											<span class="meta_info_date">
												<i class="far fa-clock"></i>
												<abbr class="date published">&nbsp;<?php echo get_the_date(); ?></abbr>
											</span>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="section_4">
				<div class="cs4_wrapper" style="background-color: rgba(0, 0, 0, 0.9);height: 316px;width: 100%">
					<div class="container">
						<div class="p4_content">
							<div class="cat_list_header">
								<div class="block_header">
									<h2 class="block_title"><?php the_field('featured_category_main_title'); ?></h2>
								</div>
								<p><?php the_field('featured_category_sub_title'); ?></p>
							</div>
							<div class="cat_list_items">
								<?php
								if( have_rows('featured_category') ):
								    while( have_rows('featured_category') ) : the_row();
								        $cate_title 	= 	get_sub_field('featured_category_title');
								        $cate_img 		= 	get_sub_field('featured_category_img');
								        $cate_url 		= 	get_sub_field('featured_category_url');
								        ?>
								        <a href="<?php echo $cate_url; ?>">
											<div class="item">
												<img src="<?php echo $cate_img['url']; ?>">
												<p><?php echo $cate_title; ?></p>
											</div>
										</a>
								    <?php endwhile;
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section_5">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="block_header">
								<h2 class="block_title">MẸO HAY</h2>
							</div>
							<div class="p5_post">
								<?php $args = array(
									'post_type' => 'post',
									'posts_per_page'  =>  4,
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field'    => 'slug',
											'terms'    => 'meo-hay',
										),
									),
								);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) : ?>
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<div class="post_item">
											<div class="p5_feat">
												<a class="p5_flink" href="<?php echo get_permalink() ?>">
													<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
												</a>
											</div>
											<div class="p5_content">
												<div class="p1_header">
													<p class="p1_entry_title">
														<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
													</p>
												</div>
												<?php the_excerpt(); ?>
												<!-- <p class="entry-summary"><?php //the_excerpt(); ?></p> -->
												<div class="p1_footer">
													<i class="far fa-user"></i>
													<span class="meta_info_author"><?php echo get_the_author() ?></span>
													<span class="meta_info_date">
														<i class="far fa-clock"></i>
														<abbr class="date published">&nbsp;<?php echo get_the_date(); ?></abbr>
													</span>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
									<?php else : ?>
										<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
									<?php endif; ?>
								</div>
							</div>
							<?php get_sidebar(); ?>
							</div>
						</div>
					</section>
				</main>

				<?php get_footer(); ?>