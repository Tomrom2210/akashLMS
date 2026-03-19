
(function() {
  const slider = document.querySelector('.ts-slider');
  if (!slider) return;
  const track = slider.querySelector('.ts-track');
  const cards = Array.from(track.querySelectorAll('.ts-card'));
  const prev = document.querySelector('.ts-prev');
  const next = document.querySelector('.ts-next');
  const dotsWrap = document.querySelector('.ts-dots');
  let index = 0;

  function cardWidth() {
    const card = cards[0];
    if (!card) return 0;
    return slider.getBoundingClientRect().width;
  }

  function scrollToIndex(i) {
    if (!cards.length) return;
    index = (i + cards.length) % cards.length;
    track.scrollTo({ left: cardWidth() * index, behavior: 'smooth' });
    updateDots();
  }

  function updateDots() {
    if (!dotsWrap) return;
    dotsWrap.querySelectorAll('button').forEach((btn, i) => {
      btn.classList.toggle('active', i === index);
    });
  }

  function buildDots() {
    if (!dotsWrap) return;
    dotsWrap.innerHTML = '';
    cards.forEach((_, i) => {
      const b = document.createElement('button');
      b.addEventListener('click', () => scrollToIndex(i));
      dotsWrap.appendChild(b);
    });
    updateDots();
  }

  prev && prev.addEventListener('click', () => scrollToIndex(index - 1));
  next && next.addEventListener('click', () => scrollToIndex(index + 1));

  track.addEventListener('scroll', () => {
    const w = cardWidth();
    if (!w) return;
    index = Math.round(track.scrollLeft / w);
    updateDots();
  });

  window.addEventListener('resize', () => scrollToIndex(index));

  buildDots();

  let auto = setInterval(() => scrollToIndex(index + 1), 5000);
  slider.addEventListener('mouseenter', () => clearInterval(auto));
  slider.addEventListener('mouseleave', () => auto = setInterval(() => scrollToIndex(index + 1), 5000));
})();
