<?php
$footer_top = get_field('footer_top', 'options');
$background_image = $footer_top['background_image'];
$image = $footer_top['image'];
?>
<div class="footer-top">
  <img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" class="footer-top__img-bg" />
  <div class="footer-top__wrapper container">
    <?php get_template_part('template-parts/form'); ?>
    <div class="footer-top__right">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="footer-top__img" />
    </div>
  </div>
</div>
