// Tabs component. Any element with data-tabs becomes a tab set.
function initTabs(container) {
    const nav      = container.querySelector('.tabs-nav');
    const scroller = container.querySelector('.tabs-scroll');
    const tabs     = Array.from(container.querySelectorAll('[role="tab"]'));
    const prevBtn  = container.querySelector('.tabs-arrow--prev');
    const nextBtn  = container.querySelector('.tabs-arrow--next');

    // --- Switching tabs (click only) ---
    function activateTab(selectedTab) {
        tabs.forEach(function (tab) {
            const isSelected = tab === selectedTab;
            const panel = document.getElementById(tab.getAttribute('aria-controls'));

            tab.setAttribute('aria-selected', isSelected);
            tab.tabIndex = isSelected ? 0 : -1;
            panel.hidden = !isSelected;
        });
    }

    tabs.forEach(function (tab, index) {
        tab.addEventListener('click', function () {
            activateTab(tab);
        });

        // Keyboard: arrow keys move focus between tabs, Enter/Space activates
        tab.addEventListener('keydown', function (e) {
            let target = null;
            if (e.key === 'ArrowRight') target = tabs[index + 1];
            if (e.key === 'ArrowLeft')  target = tabs[index - 1];
            if (e.key === 'Home')       target = tabs[0];
            if (e.key === 'End')        target = tabs[tabs.length - 1];

            if (target) {
                e.preventDefault();
                tabs.forEach(function (t) { t.tabIndex = -1; });
                target.tabIndex = 0;
                target.focus();
            }
        });
    });

    // --- Scroll arrows ---
    function updateArrows() {
        const maxScroll = scroller.scrollWidth - scroller.clientWidth;

        // Only show arrows when the tabs don't all fit
        nav.classList.toggle('has-overflow', maxScroll > 1);

        prevBtn.disabled = scroller.scrollLeft <= 0;
        nextBtn.disabled = scroller.scrollLeft >= maxScroll - 1;
    }

    prevBtn.addEventListener('click', function () {
        scroller.scrollBy({ left: -200, behavior: 'smooth' });
    });
    nextBtn.addEventListener('click', function () {
        scroller.scrollBy({ left: 200, behavior: 'smooth' });
    });

    scroller.addEventListener('scroll', updateArrows);
    window.addEventListener('resize', updateArrows);
    updateArrows();
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-tabs]').forEach(initTabs);
});
