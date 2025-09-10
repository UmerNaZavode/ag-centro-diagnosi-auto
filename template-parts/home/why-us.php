<?php
$why_us = get_field('why_us');
$background_image = $why_us['background_image'];
$title = $why_us['title'];
$image = $why_us['image'];
$items = $why_us['items'];
?>
<div class="why-us">
  <img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" class="why-us__img-bg" />
  <div class="why-us__wrapper container">
    <div class="why-us__left">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="why-us__img" />
      <h2 class="why-us__title"><?php echo $title; ?></h2>
    </div>
    <div class="why-us__right">
      <ul class="why-us__list">
        <?php foreach ($items as $item) : ?>
          <?php
          $subtitle = $item['subtitle'];
          ?>
          <li class="why-us__item">
            <div class="why-us__icon"><?php get_template_part('template-parts/icons/icon-check-circle'); ?></div>
          <h4 class="why-us__subtitle"><?php echo $subtitle; ?></h4>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
