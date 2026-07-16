/**
 * nDimensions AI — Custom Script File
 * Handles:
 *  - Services Megamenu hover/click timers
 *  - Header scrolling states
 *  - FAQ Accordion dynamic toggles
 */

(function () {
  "use strict";

  // 1. Services Megamenu Hover and Delay Toggle (for screens >= 992px)
  document.querySelectorAll('.mega-trigger').forEach(function (trigger) {
    var dropId = trigger.getAttribute('data-mega-drop');
    var drop = document.getElementById(dropId);
    if (!drop) return;
    
    var parent = trigger.parentElement;
    var timer = null;

    function open() {
      // Close other open megamenus first
      document.querySelectorAll('.mega-drop').forEach(function (otherDrop) {
        if (otherDrop !== drop) {
          otherDrop.classList.remove('open');
          otherDrop.setAttribute('aria-hidden', 'true');
          var otherTrigger = document.querySelector('[data-mega-drop="' + otherDrop.id + '"]');
          if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
        }
      });
      clearTimeout(timer);
      drop.classList.add("open");
      drop.setAttribute("aria-hidden", "false");
      trigger.setAttribute("aria-expanded", "true");
    }

    function scheduleClose() {
      timer = setTimeout(close, 120);
    }

    function close() {
      drop.classList.remove("open");
      drop.setAttribute("aria-hidden", "true");
      trigger.setAttribute("aria-expanded", "false");
    }

    parent.addEventListener("mouseenter", function () {
      if (window.innerWidth >= 992) open();
    });
    parent.addEventListener("mouseleave", function () {
      if (window.innerWidth >= 992) scheduleClose();
    });

    drop.addEventListener("mouseenter", function () {
      if (window.innerWidth >= 992) clearTimeout(timer);
    });
    drop.addEventListener("mouseleave", function () {
      if (window.innerWidth >= 992) scheduleClose();
    });

    trigger.addEventListener("click", function (e) {
      if (window.innerWidth >= 992) {
        e.preventDefault();
        drop.classList.contains("open") ? close() : open();
      }
    });

    drop.querySelectorAll(".mega-item, .mega-item-simple, .mega-item-desc").forEach(function (el) {
      el.addEventListener("click", close);
    });
  });

  // Close menus on Escape key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      document.querySelectorAll('.mega-drop').forEach(function (drop) {
        drop.classList.remove("open");
        drop.setAttribute("aria-hidden", "true");
        var trigger = document.querySelector('[data-mega-drop="' + drop.id + '"]');
        if (trigger) trigger.setAttribute("aria-expanded", "false");
      });
    }
  });

  // 2. FAQ Accordion Toggle Interaction
  document.querySelectorAll('.faq-trigger').forEach(function (button) {
    button.addEventListener('click', function () {
      var isOpen = button.getAttribute('data-open') === 'true';
      var answer = button.nextElementSibling;

      // Close all other FAQs
      document.querySelectorAll('.faq-trigger').forEach(function (otherButton) {
        if (otherButton !== button) {
          otherButton.setAttribute('data-open', 'false');
          var otherAnswer = otherButton.nextElementSibling;
          if (otherAnswer) {
            otherAnswer.classList.add('d-none');
          }
        }
      });

      // Toggle current FAQ
      if (isOpen) {
        button.setAttribute('data-open', 'false');
        if (answer) answer.classList.add('d-none');
      } else {
        button.setAttribute('data-open', 'true');
        if (answer) answer.classList.remove('d-none');
      }
    });
  });

  // 3. Header Scrolled Toggle Class
  var handleScroll = function () {
    var header = document.getElementById("siteHeader");
    if (header) {
      if (window.scrollY > 10) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    }
  };

  window.addEventListener("scroll", handleScroll, { passive: true });
  // Initial check on load
  handleScroll();

})();
