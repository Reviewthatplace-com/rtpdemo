(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * company member isotopes isotope and filter
   */
  window.addEventListener('load', () => {
    let companymemberContainer = select('.companymember-container');
    if (companymemberContainer) {
      let companymemberIsotope = new Isotope(companymemberContainer, {
        itemSelector: '.companymember-item'
      });

      let companymemberFilters = select('#companymember-flters li', true);

      on('click', '#companymember-flters li', function(e) {
        e.preventDefault();
        companymemberFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        companymemberIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        companymemberIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  
})()