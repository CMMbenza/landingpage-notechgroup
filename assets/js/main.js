// Navigation, portfolio filters, contact form and small UI interactions
document.addEventListener('DOMContentLoaded', () => {
  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();

  const nav = document.querySelector('.site-nav');
  const backTop = document.querySelector('.back-top');
  const onScroll = () => {
    if (nav) nav.classList.toggle('nav-scrolled', window.scrollY > 25);
    if (backTop) backTop.classList.toggle('show', window.scrollY > 450);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  document.querySelectorAll('.navbar .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const menu = document.querySelector('.navbar-collapse');
      if (menu && menu.classList.contains('show')) {
        bootstrap.Collapse.getOrCreateInstance(menu).hide();
      }
    });
  });

  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      filterButtons.forEach(item => item.classList.remove('active'));
      button.classList.add('active');
      const filter = button.dataset.filter;
      portfolioItems.forEach(item => {
        const show = filter === 'all' || item.dataset.category === filter;
        item.classList.toggle('hide', !show);
      });
    });
  });

  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', event => {
      event.preventDefault();
      if (!form.reportValidity()) return;
      const data = new FormData(form);
      const subject = encodeURIComponent(data.get('subject') || 'Demande de renseignements — NOTECH Group');
      const body = encodeURIComponent(
        `Nom : ${data.get('name')}\nEmail : ${data.get('email')}\nTéléphone : ${data.get('phone')}\n\nMessage :\n${data.get('message')}`
      );
      document.getElementById('formNote').textContent = 'Votre application e-mail va s’ouvrir avec le message prérempli.';
      window.location.href = `mailto:contact@notechgroup.com?subject=${subject}&body=${body}`;
    });
  }
});

/* =========================================
   SLIDER AUTOMATIQUE PARTENAIRES
========================================= */

(() => {

  const viewport = document.querySelector('.partner-viewport');
  const track = document.querySelector('.partner-track');
  const prev = document.querySelector('.partner-prev');
  const next = document.querySelector('.partner-next');

  if (!viewport || !track || !prev || !next) return;

  const originals = Array.from(track.children);
  const total = originals.length;

  // Dupliquer les logos pour assurer le défilement continu
  originals.forEach(item => {
    track.appendChild(item.cloneNode(true));
  });

  let index = 0;
  let timer = null;

  // Calcul de la largeur d'un élément + espace
  function getStep() {
    const item = track.querySelector('.partner-logo');
    const gap = parseFloat(getComputedStyle(track).gap) || 0;

    return item.getBoundingClientRect().width + gap;
  }

  // Déplacement
  function move() {
    track.style.transform =
      `translateX(-${index * getStep()}px)`;
  }

  // Suivant
  function slideNext() {

    index++;

    track.style.transition = 'transform .55s ease';

    move();

    // Revenir discrètement au début
    if (index >= total) {

      setTimeout(() => {

        track.style.transition = 'none';

        index = 0;

        move();

      }, 560);
    }
  }

  // Précédent
  function slidePrev() {

    if (index <= 0) {

      track.style.transition = 'none';

      index = total;

      move();

      track.offsetHeight;
    }

    index--;

    track.style.transition = 'transform .55s ease';

    move();
  }

  // Démarrer le défilement automatique
  function startSlider() {

    stopSlider();

    timer = setInterval(slideNext, 3000);
  }

  // Arrêter le défilement
  function stopSlider() {

    if (timer) {
      clearInterval(timer);
      timer = null;
    }
  }

  // Boutons
  next.addEventListener('click', () => {
    slideNext();
    startSlider();
  });

  prev.addEventListener('click', () => {
    slidePrev();
    startSlider();
  });

  // Pause au survol
  viewport.addEventListener('mouseenter', stopSlider);
  viewport.addEventListener('mouseleave', startSlider);

  // Pause pendant le toucher
  viewport.addEventListener('touchstart', stopSlider, {
    passive: true
  });

  viewport.addEventListener('touchend', startSlider, {
    passive: true
  });

  // Adaptation responsive
  window.addEventListener('resize', () => {
    index = 0;
    track.style.transition = 'none';
    move();
  });

  // Lancement automatique
  startSlider();

})();