document.addEventListener('DOMContentLoaded', function () {
  // Mobile nav toggle
  var toggle = document.querySelector('.nav-toggle');
  var links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      links.classList.toggle('open');
    });
    links.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        links.classList.remove('open');
      });
    });
  }

  // Contact form: no backend wired up yet, so just acknowledge the submit.
  // Swap this for EmailJS, Formspree, or your own endpoint when you're ready.
  var form = document.getElementById('contact-form');
  var note = document.getElementById('contact-form-note');
  if (form && note) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      note.textContent = 'This form isn\'t connected to anything yet — wire it up to EmailJS or your own endpoint.';
      form.reset();
    });
  }
});
