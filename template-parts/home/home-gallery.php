<?php
$home_gallery = get_field('home_gallery');
$items = $home_gallery['items'];
$button_text = $home_gallery['button_text'];
?>
<div class="home-gallery container">
  <div class="home-gallery__wrapper">
    <?php foreach ($items as $item) : ?>
      <?php
      $image = $item['image'];
      $width = $item['width'];
      ?>
      <div class="home-gallery__item cl-<?php echo $width; ?>">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php endforeach; ?>
  </div>
  <footer class="home-gallery__footer">
    <a href="<?php echo get_the_permalink(613) ?>" class="home-gallery__button btn"><?php echo $button_text; ?></a>
  </footer>
</div>
