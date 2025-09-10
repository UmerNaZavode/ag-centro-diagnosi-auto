<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
function page_register_search()
{
  register_rest_route('api/v1', 'services', [
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'pageSearchResults',
  ]);
}

add_action('rest_api_init', 'page_register_search');
function pageSearchResults()
{

  $home_id = 2;
  $our_services = get_field("our_services", $home_id);

  return [
    "our_services" => $our_services,
  ];
}
