<footer class="footer">
    <div class="footer_widget">
      <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <h4>VỀ CHÚNG TÔI</h4>
          <p class="footer_text"><?php the_field('footer_about', 'option'); ?></p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <h4>LIÊN KẾT NHANH</h4>
          <ul class="contact">
          <?php 
          $args = array(
              'type'      => 'post',
              'parent'    => '',
              'hide_empty' => 1,
          );
          $categories = get_categories( $args );
            foreach ($categories as $categorie) {
              $name         = $categorie->name;
              $slug         =   $categorie->slug;
              $post_number    = $categorie->category_count;
            ?>
            <li><a href="<?php echo get_bloginfo('url').'/category/'.$slug; ?>"><?php echo $name; ?></a></li>
            <?php } ?>
        </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <h4>LIÊN HỆ</h4>
          <ul class="contact">
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span><?php the_field('footer_address', 'option'); ?></span>
            </li>
            <li>
              <i class="fas fa-envelope"></i>
              <span><?php the_field('footer_email', 'option'); ?></span>
            </li>
            <li>
              <i class="fas fa-phone-alt"></i>
              <span><?php the_field('footer_phone', 'option'); ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer_copyright">
      <div class="copyright_inner">
        <p><?php the_field('footer_copyright', 'option'); ?></p>
      </div>
    </div>
  </footer>
  <a href="#" class="go-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
</body>
<?php wp_footer(); ?>
</html>