<?php
$certificates = [
  'AWS Certified Cloud Practitioner',
  'Meta Front-End Developer Professional Certificate',
];
$achievements = [
  'Placed in a university-level hackathon or coding contest.',
  'Contributed to an open-source project — name it and link to the merged PR.',
];
?>
<section id="certificates" class="certificates">
  <h2 class="section-heading">Certificates &amp; achievements</h2>
  <div class="certificates-grid">
    <div>
      <h3 class="skills-category">Certifications</h3>
      <ul class="plain-list">
        <?php foreach ($certificates as $c): ?>
        <li><?= htmlspecialchars($c) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h3 class="skills-category">Hackathons &amp; open source</h3>
      <ul class="plain-list">
        <?php foreach ($achievements as $a): ?>
        <li><?= htmlspecialchars($a) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
