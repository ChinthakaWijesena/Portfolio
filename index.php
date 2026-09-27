<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chinthaka Sandaruwan &mdash; Software Engineer</title>
  <meta name="description" content="Portfolio of Chinthaka Sandaruwan, software engineer.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <nav class="site-nav">
    <div class="site-nav-inner">
      <a href="#hero" class="site-logo">Chinthaka Sandaruwan</a>
      <button class="nav-toggle" aria-label="Toggle navigation">Menu</button>
      <ul class="nav-links">
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#certificates">Certificates</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <?php include 'php/hero.php'; ?>
  <?php include 'php/projects.php'; ?>
  <?php include 'php/skills.php'; ?>
  <?php include 'php/experience-education.php'; ?>
  <?php include 'php/certificates.php'; ?>
  <?php include 'php/contact.php'; ?>

  <footer class="site-footer">
    <p>&copy; <?= date('Y') ?> Chinthaka Sandaruwan. Built with PHP, HTML &amp; CSS.</p>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
