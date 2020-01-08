<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="main-header">
    <div class="main-header__content">
      <a href="<?php echo esc_url(home_url('/')) ?>" class="main-header__title">
        <h1><?php bloginfo('name'); ?></h1>
      </a>
    </div>
  </header>