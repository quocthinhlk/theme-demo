<?php
/**
 * template name: Liên hệ
 */
?>

<?php get_header(); ?>
<div class="wp_bread_crumb">
	<div class="bread_crumb">
		<div class="container">
			<h1 class="header">Liên hệ</h1>
			<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp;  <span>»</span> &nbsp; <span class="current-item">Liên hệ</span></div>
		</div>
	</div>
</div>
<div class="bg-gray section-space">
	<div class="row">
		<div class="col-md-12">
			<div class="form">
				<div class="row section-title">
					<div class="col-md-12">
						<h2 class="text-center">Liên hệ</h2>
					</div>
				</div>
				<form class="col-md-6 center-block form-active clearfix " data-client-email-field="E-mail" data-client-name-field="Name" data-title="New email from your website" method="post">
					<div class="col-md-6">
						<input class="form-field" name="Name" placeholder="Tên" type="text">
					</div>
					<div class="col-md-6">
						<input class="form-field" data-required="no" name="Phone" placeholder="Điện thoại" type="text">
					</div>
					<div class="col-md-6">
						<input class="form-field" name="E-mail" placeholder="Email" type="email">
					</div>
					<div class="col-md-6">
						<input class="form-field" name="Subject" placeholder="Tiêu đề" type="text">
					</div>
					<div class="col-md-12">
						<textarea class="form-field" cols="5" name="message" placeholder="Nội dung" rows="10"></textarea>
					</div>
					<div class="col-md-12 text-center">
						<button class="button " type="button"><span>Gửi</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="contact_map">
	<?php the_field('embed_location'); ?>
</div>
<?php get_footer(); ?>