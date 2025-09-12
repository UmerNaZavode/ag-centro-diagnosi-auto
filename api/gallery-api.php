<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
function galleryApi()
{
  register_rest_route('api/v1', 'gallery', [
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'galleryFunc',
  ]);
}

add_action('rest_api_init', 'galleryApi');
function galleryFunc()
{

  $gallery_page_id = 613;
  $vue_gallery = get_field("vue_gallery", $gallery_page_id);
  $gallery = $vue_gallery['gallery'];

  return [
    "gallery" => $gallery,
  ];
}
