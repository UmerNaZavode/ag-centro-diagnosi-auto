<?php
$page_intro = get_field('page_intro');
$image = $page_intro['image'];
$label = $page_intro['label'];
$title = $page_intro['title'];
?>
<div class="page-intro">
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <div class="blur"></div>
  <div class="page-intro__inner container">
    <div class="page-intro__wrapper">
      <h1 class="page-intro__label"><?php echo $label; ?></h1>
      <h3 class="page-intro__title"><?php echo $title; ?></h3>
    </div>
  </div>
</div>
