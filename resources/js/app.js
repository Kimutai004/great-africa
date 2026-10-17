/* Great Africa — site behaviour (no dependencies) */
(function () {
    'use strict';

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ----- Sticky header shadow ----- */
    var header = document.querySelector('.site-header');
    if (header) {
        var onScroll = function () {
            header.classList.toggle('is-scrolled', window.scrollY > 8);
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ----- Mobile drawer ----- */
    var toggle = document.getElementById('navToggle');
    var drawer = document.getElementById('mobileDrawer');

    if (toggle && drawer) {
        var closeBtn = drawer.querySelector('.drawer-close');
        var lastFocused = null;

        var openDrawer = function () {
            lastFocused = document.activeElement;
            drawer.classList.add('open');
            toggle.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
            if (closeBtn) closeBtn.focus();
        };

        var closeDrawer = function () {
            drawer.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
        };

        toggle.addEventListener('click', function () {
            drawer.classList.contains('open') ? closeDrawer() : openDrawer();
        });

        if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

        drawer.addEventListener('click', function (e) {
            if (e.target === drawer) closeDrawer();
        });

        drawer.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeDrawer);
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && drawer.classList.contains('open')) closeDrawer();
        });
    }

    /* ----- Scroll reveal ----- */
    if (!reduced && 'IntersectionObserver' in window) {
        var revealEls = document.querySelectorAll('.reveal');
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-in');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(function (el) { io.observe(el); });
    } else {
        document.querySelectorAll('.reveal').forEach(function (el) {
            el.classList.add('is-in');
        });
    }

    /* ----- Donation tier selection ----- */
    var amountInput = document.getElementById('donate-amount');
    if (amountInput) {
        document.querySelectorAll('[data-tier-amount]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var raw = btn.getAttribute('data-tier-amount').replace(/[^0-9]/g, '');
                amountInput.value = raw;
                amountInput.focus();
                document.querySelectorAll('[data-tier-amount]').forEach(function (b) {
                    b.classList.remove('is-selected');
                });
                btn.classList.add('is-selected');
            });
        });
    }
})();

