<?php
$experience = [
  [
    'role' => 'Software Engineer Intern',
    'org' => 'Company Name',
    'period' => '2025 — Present',
    'points' => [
      'What you built or owned, described as an outcome rather than a task.',
      'A second achievement, ideally with a number attached to it.',
    ],
  ],
];
$education = [
  [
    'degree' => 'BSc (Hons) in Software Engineering',
    'org' => 'University / Institute Name',
    'period' => '2022 — 2026',
  ],
];
?>
<section id="experience" class="timeline-section">
  <h2 class="section-heading">Experience &amp; education</h2>

  <div class="timeline">
    <h3 class="timeline-subheading">Experience</h3>
    <?php foreach ($experience as $job): ?>
    <div class="timeline-entry">
      <div class="timeline-marker"></div>
      <div class="timeline-content">
        <p class="timeline-period"><?= htmlspecialchars($job['period']) ?></p>
        <h4 class="timeline-title"><?= htmlspecialchars($job['role']) ?> &middot; <?= htmlspecialchars($job['org']) ?></h4>
        <ul class="timeline-points">
          <?php foreach ($job['points'] as $point): ?>
          <li><?= htmlspecialchars($point) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="timeline">
    <h3 class="timeline-subheading">Education</h3>
    <?php foreach ($education as $edu): ?>
    <div class="timeline-entry">
      <div class="timeline-marker"></div>
      <div class="timeline-content">
        <p class="timeline-period"><?= htmlspecialchars($edu['period']) ?></p>
        <h4 class="timeline-title"><?= htmlspecialchars($edu['degree']) ?> &middot; <?= htmlspecialchars($edu['org']) ?></h4>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
