<?php
$projects = [
  [
    'name' => 'Project One',
    'summary' => 'A short description of the problem this project solves and who it is for.',
    'stack' => ['React', 'Node.js', 'PostgreSQL', 'Docker'],
    'features' => 'One or two sentences on the key feature or the hardest part you solved.',
    'live' => '#',
    'repo' => '#',
  ],
  [
    'name' => 'Project Two',
    'summary' => 'A short description of the problem this project solves and who it is for.',
    'stack' => ['Spring Boot', 'MySQL', 'AWS'],
    'features' => 'One or two sentences on the key feature or the hardest part you solved.',
    'live' => '#',
    'repo' => '#',
  ],
  [
    'name' => 'Project Three',
    'summary' => 'A short description of the problem this project solves and who it is for.',
    'stack' => ['Python', 'TensorFlow', 'FastAPI'],
    'features' => 'One or two sentences on the key feature or the hardest part you solved.',
    'live' => '#',
    'repo' => '#',
  ],
];
?>
<section id="projects" class="projects">
  <h2 class="section-heading">Projects</h2>
  <div class="project-list">
    <?php foreach ($projects as $p): ?>
    <article class="project">
      <div class="project-main">
        <h3 class="project-name"><?= htmlspecialchars($p['name']) ?></h3>
        <p class="project-summary"><?= htmlspecialchars($p['summary']) ?></p>
        <p class="project-features"><?= htmlspecialchars($p['features']) ?></p>
        <ul class="project-stack">
          <?php foreach ($p['stack'] as $tech): ?>
          <li><?= htmlspecialchars($tech) ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="project-links">
          <a href="<?= htmlspecialchars($p['live']) ?>">Live site</a>
          <a href="<?= htmlspecialchars($p['repo']) ?>">Source code</a>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>
