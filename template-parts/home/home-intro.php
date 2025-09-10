<?php
$home_intro = get_field('home_intro');
$image = $home_intro['image'];
$subtitle = $home_intro['subtitle'];
$title = $home_intro['title'];
?>
<div class="home-intro">
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <div class="home-intro__inner container">
    <div class="home-intro__wrapper">
      <h3 class="home-intro__label"><?php echo $subtitle; ?></h3>
      <h1 class="home-intro__title"><?php echo $title; ?></h2>
    </div>
  </div>
</div>
