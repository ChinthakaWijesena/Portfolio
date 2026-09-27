<?php
$skills = [
  'Languages' => ['Java', 'JavaScript', 'TypeScript', 'Python', 'C#'],
  'Frameworks & Libraries' => ['React', 'Next.js', 'Node.js', 'Spring Boot', 'Express'],
  'Databases' => ['PostgreSQL', 'MySQL', 'MongoDB', 'Redis'],
  'Tools & DevOps' => ['Git', 'Docker', 'AWS', 'Postman', 'Linux', 'CI/CD'],
];
?>
<section id="skills" class="skills">
  <h2 class="section-heading">Technical skills</h2>
  <div class="skills-grid">
    <?php foreach ($skills as $category => $items): ?>
    <div class="skills-group">
      <h3 class="skills-category"><?= htmlspecialchars($category) ?></h3>
      <ul class="skills-items">
        <?php foreach ($items as $item): ?>
        <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </div>
</section>
