<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body>

<header>
  <header>
  <h1><?php bloginfo('name'); ?></h1>
  <nav>
    <a href="#home" class="scroll-link" data-target="#home">Home</a>
    <a href="#about" class="scroll-link" data-target="#about">About</a>
    <a href="#services" class="scroll-link" data-target="#services">Services</a>
    <a href="<?php echo get_permalink(get_page_by_path('careers')); ?>">Careers</a>
  </nav>
</header>
</header>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Add smooth scroll behavior to the links
  var scrollLinks = document.querySelectorAll('.scroll-link');

  // Detect if the user is on the homepage
  function isHomePage() {
    return window.location.pathname === '/' || window.location.pathname === '/hello-world/';
  }

  scrollLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      // Prevent default behavior
      event.preventDefault();

      var targetSection = document.querySelector(this.getAttribute('data-target'));

      if (isHomePage()) {
        // If on the homepage, scroll to the section
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: 'smooth'
        });
      } else {
        // If not on the homepage, navigate to the homepage and include the hash
        window.location.href = "<?php echo home_url(); ?>" + this.getAttribute('href');
      }
    });
  });
});
</script>
