<!-- ==================== SCRIPTS ==================== -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // AOS
        AOS.init({ duration: 750, once: true, offset: 80 });

        document.addEventListener('DOMContentLoaded', function () {

            // ---- Hero Swiper ----
            new Swiper('.swiper-hero', {
                loop: true,
                speed: 1000,
                autoplay: { delay: 5500, disableOnInteraction: false },
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                effect: 'fade',
                fadeEffect: { crossFade: true },
            });

            // ---- Category Swiper ----
            const catSw = new Swiper('.catSwiper', {
                slidesPerView: 1.15,
                spaceBetween: 16,
                centeredSlides: false,
                breakpoints: {
                    480: { slidesPerView: 1.6, spaceBetween: 18 },
                    640: { slidesPerView: 2.2, spaceBetween: 18 },
                    768: { slidesPerView: 2.6, spaceBetween: 20 },
                    992: { slidesPerView: 3.2, spaceBetween: 22 },
                    1200: { slidesPerView: 4, spaceBetween: 24 }
                }
            });

            document.getElementById('catPrev').addEventListener('click', () => catSw.slidePrev());
            document.getElementById('catNext').addEventListener('click', () => catSw.slideNext());

            // ---- Product Swiper ----
            const prodSw = new Swiper('.prodSwiper', {
                slidesPerView: 1.15,
                spaceBetween: 16,
                breakpoints: {
                    480: { slidesPerView: 1.6, spaceBetween: 18 },
                    640: { slidesPerView: 2.1, spaceBetween: 18 },
                    768: { slidesPerView: 2.5, spaceBetween: 20 },
                    992: { slidesPerView: 3.2, spaceBetween: 22 },
                    1200: { slidesPerView: 4, spaceBetween: 24 }
                }
            });

            document.getElementById('prodPrev').addEventListener('click', () => prodSw.slidePrev());
            document.getElementById('prodNext').addEventListener('click', () => prodSw.slideNext());
        });

        // ---- Scroll events ----
        window.addEventListener('scroll', function () {
            const s = window.scrollY;
            document.querySelector('.navbar').classList.toggle('scrolled', s > 50);
            document.getElementById('btt').classList.toggle('show', s > 400);
        });

        // ---- Smooth scroll with navbar offset ----
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href && href.length > 1 && document.querySelector(href)) {
                    e.preventDefault();
                    // Close mobile nav if open
                    const colEl = document.getElementById('navMain');
                    if (colEl && colEl.classList.contains('show')) {
                        bootstrap.Collapse.getInstance(colEl)?.hide();
                    }
                    const offset = document.querySelector('.navbar').offsetHeight + 12;
                    const top = document.querySelector(href).getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // ---- Countdown timer ----
        (function () {
            let total = 12 * 3600 + 45 * 60 + 30;
            const hEl = document.getElementById('t-h');
            const mEl = document.getElementById('t-m');
            const sEl = document.getElementById('t-s');
            function tick() {
                if (total <= 0) return;
                total--;
                hEl.textContent = String(Math.floor(total / 3600)).padStart(2, '0');
                mEl.textContent = String(Math.floor((total % 3600) / 60)).padStart(2, '0');
                sEl.textContent = String(total % 60).padStart(2, '0');
            }
            setInterval(tick, 1000);
        })();

        // ---- Footer form ----
        document.getElementById('footerForm')?.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = this.querySelector('.foot-submit');
            const orig = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check"></i> Sent Successfully!';
            btn.style.background = '#2d6a4f';
            setTimeout(() => {
                btn.innerHTML = orig;
                btn.style.background = '';
                this.reset();
            }, 3000);
        });

        // ---- Active nav on scroll ----
        const sections = document.querySelectorAll('section[id], footer[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        const navH = document.querySelector('.navbar').offsetHeight;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    navLinks.forEach(l => {
                        l.classList.remove('active');
                        if (l.getAttribute('href') === '#' + id) l.classList.add('active');
                    });
                }
            });
        }, { rootMargin: `-${navH + 10}px 0px -60% 0px` });

        sections.forEach(s => observer.observe(s));

    </script>
    <script>
        // PM FAQ Filter Tags
        document.querySelectorAll('.pm-faq-tag').forEach(tag => {
            tag.addEventListener('click', function () {
                document.querySelectorAll('.pm-faq-tag').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                const filter = this.getAttribute('data-filter');
                document.querySelectorAll('.pm-faq-item').forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.classList.remove('pm-faq-hidden');
                    } else {
                        item.classList.add('pm-faq-hidden');
                    }
                });
            });
        });
    </script>