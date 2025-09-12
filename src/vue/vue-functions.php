<?php

add_shortcode('our-services', 'ourServiceFunction');

function ourServiceFunction($atts, $content = null)
{

  return "<div id='ourServices'>
  </div>";
}

add_shortcode('gallery', 'ourGallery');

function ourGallery($atts, $content = null)
{

  return "<div id='ourGallery'>
  </div>";
}
