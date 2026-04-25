 (function () {
    const track    = document.getElementById('relSliderTrack');
    const prevBtn  = document.getElementById('relPrev');
    const nextBtn  = document.getElementById('relNext');
    const dotsWrap = document.getElementById('relDots');

    if (!track || !prevBtn || !nextBtn) return;

    const originalCards = Array.from(track.querySelectorAll('.pv-rel-card'));
    const total = originalCards.length;

    function visibleCount() {
      const w = window.innerWidth;
      if (w >= 1200) return 4;
      if (w >= 768)  return 3;
      if (w >= 480)  return 2;
      return 1;
    }

    function buildClones() {
      track.querySelectorAll('.pv-rel-clone').forEach(c => c.remove());
      const visible = visibleCount();
      for (let i = 0; i < visible; i++) {
        const clone = originalCards[i % total].cloneNode(true);
        clone.classList.add('pv-rel-clone');
        track.appendChild(clone);
      }
      for (let i = visible - 1; i >= 0; i--) {
        const clone = originalCards[(total - visible + i) % total].cloneNode(true);
        clone.classList.add('pv-rel-clone');
        track.insertBefore(clone, track.firstChild);
      }
    }

    function cardWidth() {
      const card = track.querySelector('.pv-rel-card');
      if (!card) return 0;
      return card.getBoundingClientRect().width + 20;
    }

    let realIndex = 0;

    function jumpTo(index) {
      const visible = visibleCount();
      const offset = (index + visible) * cardWidth();
      track.style.transition = 'none';
      track.style.transform  = `translateX(-${offset}px)`;
    }

    function slideTo(index) {
      const visible = visibleCount();
      const offset  = (index + visible) * cardWidth();
      track.style.transition = 'transform .45s cubic-bezier(.4, 0, .2, 1)';
      track.style.transform  = `translateX(-${offset}px)`;
      realIndex = index;
      updateDots();
    }

    track.addEventListener('transitionend', () => {
      if (realIndex >= total) {
        realIndex = realIndex - total;
        jumpTo(realIndex);
      } else if (realIndex < 0) {
        realIndex = realIndex + total;
        jumpTo(realIndex);
      }
      updateDots();
    });

    function buildDots() {
      dotsWrap.innerHTML = '';
      for (let i = 0; i < total; i++) {
        const dot = document.createElement('button');
        dot.className = 'pv-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dot.addEventListener('click', () => {
          realIndex = i;
          slideTo(realIndex);
        });
        dotsWrap.appendChild(dot);
      }
    }

    function updateDots() {
      const normalized = ((realIndex % total) + total) % total;
      dotsWrap.querySelectorAll('.pv-dot').forEach((d, i) => {
        d.classList.toggle('active', i === normalized);
      });
    }

    prevBtn.addEventListener('click', () => slideTo(realIndex - 1));
    nextBtn.addEventListener('click', () => slideTo(realIndex + 1));

    let touchStartX = 0;
    track.addEventListener('touchstart', e => {
      touchStartX = e.touches[0].clientX;
    }, { passive: true });

    track.addEventListener('touchend', e => {
      const diff = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) {
        diff > 0 ? slideTo(realIndex + 1) : slideTo(realIndex - 1);
      }
    }, { passive: true });

    let autoPlay = setInterval(() => slideTo(realIndex + 1), 4000);
    track.addEventListener('mouseenter', () => clearInterval(autoPlay));
    track.addEventListener('mouseleave', () => {
      autoPlay = setInterval(() => slideTo(realIndex + 1), 4000);
    });

    function init() {
      realIndex = 0;
      buildClones();
      buildDots();
      jumpTo(0);
    }

    init();

    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(init, 200);
    });
  })();