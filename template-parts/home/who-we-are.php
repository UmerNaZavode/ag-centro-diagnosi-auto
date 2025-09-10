<?php
$who_we_are = get_field('who_we_are');
$background_image = $who_we_are['background_image'];
$title = $who_we_are['title'];
$description = $who_we_are['description'];
$gallery = $who_we_are['gallery'];
$text = $who_we_are['text'];
$button_text = $who_we_are['button_text'];
$button_url = $who_we_are['button_url'];
?>
<div class="who-we-are">
  <img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" class="who-we-are__img-bg" />
  <div class="who-we-are__wrapper container">
    <div class="who-we-are__content">
      <div class="who-we-are__left">
        <h2 class="who-we-are__title"><?php echo $title; ?></h2>
        <div class="who-we-are__desc"><?php echo $description; ?></div>
      </div>
      <div class="who-we-are__right">
        <img src="<?php echo esc_url($gallery[0]); ?>" alt="<?php echo esc_attr($gallery[0]); ?>" class="who-we-are__img" />
      </div>
    </div>

    <div class="who-we-are__content">
      <div class="who-we-are__left">
        <div class="who-we-are__text"><?php echo $text; ?></div>
        <button class="who-we-are__btn btn"><?php echo $button_text; ?></button>
      </div>
      <div class="who-we-are__right">
        <img src="<?php echo esc_url($gallery[1]); ?>" alt="<?php echo esc_attr($gallery[1]); ?>" class="who-we-are__img" />
      </div>
    </div>
  </div>
</div>
