<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="p5_social">
		<div class="follow_social">
			<p class="title">THEO DÕI CHÚNG TÔI</p>
			<div class="social_follower">
				<a class="follower_item" href="<?php the_field('facebook', 'option'); ?>">
					<div class="follower bg_facebook">
						<div class="left_el">
							<span class="follower_icon"><i class="fab fa-facebook-f"></i></span>
							<span class="num_count">Facebook</span>
						</div>
						<span class="right_el">LIKE</span>
					</div>
				</a>
				<a class="follower_item" href="<?php the_field('twitter', 'option'); ?>">
					<div class="follower bg_twitter">
						<div class="left_el">
							<span class="follower_icon"><i class="fab fa-twitter"></i></span>
							<span class="num_count">Twitter</span>
						</div>
						<span class="right_el">FOLLOW</span>
					</div>
				</a>
				<a class="follower_item" href="<?php the_field('pinterest', 'option'); ?>">
					<div class="follower bg_pinterest">
						<div class="left_el">
							<span class="follower_icon"><i class="fab fa-pinterest"></i></span>
							<span class="num_count">Pinterest</span>
						</div>
						<span class="right_el">PIN</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="p5_post_recently">
		<p>TIN TỨC</p>
		<?php $args = array(
			'post_type' => 'post',
			'posts_per_page'  =>  4,
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => 'tin-tuc',
				),
			),
		);
		$the_query = new WP_Query( $args ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="recently_item">
					<a href="<?php echo get_permalink() ?>"><div class="item_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
					<div class="recently_txt">
						<p class="title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></p>
						<p class="date"><i class="far fa-clock"></i><span>&nbsp;<?php echo get_the_date(); ?></span></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>