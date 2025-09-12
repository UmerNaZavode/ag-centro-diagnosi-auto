<?php
$footer = get_field('footer', 'option');
$phone_number = $footer['phone_number'];
$whatsapp = $footer['whatsapp'];
$email = $footer['email'];
$full_address = $footer['full_address'];
$google_url = $footer['google_url'];
$hours = $footer['hours'];
$socials = $footer['socials'];
$form_title = $footer['form_title'];
$form_text = $footer['form_text'];
$full_company_name = $footer['full_company_name'];
$short_company_name = $footer['short_company_name'];
$vat = $footer['vat'];
$partner_url = $footer['partner_url'];
$partner_logo = $footer['partner_logo'];
$map = get_field('map', 'option');
$coords_map = $map['coords_map'];
$map_icon = $map['map_icon'];
$zoom = $map['zoom'];
$address_text = $map['address_text'];
?>
<div class="footer-bottom">
  <div class="footer-bottom__wrapper container">
    <div class="footer-bottom-left">
      <span id="map-address" style="display: none;">
        <?php echo $address_text; ?>
      </span>
      <span id="map-coords" style="display: none;">
        <?php echo $coords_map; ?>
      </span>
      <span id="map-icon" style="display: none;"><?php echo $map_icon; ?></span>
      <span id="map-zoom" style="display: none;"><?php echo $zoom; ?></span>
      <div id="map" style="height: 47rem; width: 72rem;"></div>
    </div>
    <div class="footer-bottom-right">
      <header class="footer-bottom-right__header">
        <div class="footer-bottom-right__phone">
          <div class="footer-bottom-right__label">Telefono</div>
          <a href="tel:<?php echo clear_phone($phone_number); ?>" target="_blank" class="footer-bottom-right__mobile">
            <?php echo $phone_number; ?>
          </a>
        </div>
        <div class="footer-bottom-right__socials">
          <ul class="footer-bottom-right__list">
            <?php foreach ($socials as $item) : ?>
              <?php
              $icon = $item['icon'];
              $url = $item['url'];
              ?>
              <li class="footer-bottom-right__item">
                <a href="<?php echo $url; ?>" target="_blank"><?php echo $icon; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </header>
      <div class="footer-bottom-right__body">
        <div class="footer-bottom-right__left">
          <div class="footer-bottom-right__contact">
            <div class="footer-bottom-right__label">WhatsApp</div>
            <div class="footer-bottom-right__content">
              <?php get_template_part("template-parts/icons/icon-whatsapp"); ?>
              <a href="https://wa.me/?text=<?php echo clear_phone($whatsapp); ?>" target="_blank"><?php echo $whatsapp; ?></a>
            </div>
          </div>
          <div class="footer-bottom-right__contact">
            <div class="footer-bottom-right__label">Email</div>
            <div class="footer-bottom-right__content">
              <a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a>
            </div>
          </div>
          <div class="footer-bottom-right__contact">
            <div class="footer-bottom-right__label">Indirizzo</div>
            <div class="footer-bottom-right__content">
              <a href="<?php echo $google_url; ?>" target="_blank">
                <?php echo $full_address; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="footer-bottom-right__right">
          <div class="footer-bottom-right__label">Orari di apertura</div>
          <div class="footer-bottom-right__hours">
            <?php foreach ($hours as $item) : ?>
              <?php
              $item = $item['item'];
              ?>
              <div class="footer-bottom-right__content">
                <?php echo $item; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom__row container">
    <div class="footer-bottom__copyright">
      <p>
        Copyright &copy; <?php echo date('Y'); ?> <?php echo $short_company_name; ?>. IVA <?php echo $vat; ?>.
      </p>
      <div class="footer-bottom__partner">
        <p>Centro Diagnosi Auto ha scelto</p> <a href="<?php echo $partner_url; ?>"><img src="<?php echo $partner_logo; ?>" alt=""></a>
      </div>
    </div>
    <div class="footer-bottom__menu">
      <?php wp_nav_menu([
        'theme_location'  => 'footer-copyright-menu',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'footer-copyright-menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'         => '',
      ]); ?>
    </div>
  </div>
</div>
