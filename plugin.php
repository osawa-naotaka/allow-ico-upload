<?php
/*
  Plugin Name: allow ico upload
  Plugin URI: https://github.com/osawa-naotaka/allow-ico-upload
  Description: allow ico file upload to media library.
  Version: 1.0.0
  Author: osawa naotaka
  Author URI: https://github.com/osawa-naotaka
  License: MIT
 */

add_filter('upload_mimes', fn ($mimes) =>
  array_merge($mimes, ['ico' => 'image/vnd.microsoft.icon'])
);
