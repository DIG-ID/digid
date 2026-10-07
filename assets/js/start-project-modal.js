import { Modal, Collapse } from 'bootstrap';
import { lenis } from './gsap';

// Opens the "start a project" form in a modal instead of navigating to its page.
document.addEventListener('DOMContentLoaded', () => {
  const modalEl = document.getElementById('modal-start-project');

  if ( ! modalEl ) {
    return;
  }

  const modal = Modal.getOrCreateInstance(modalEl);
  const normalizePath = (url) => new URL(url, window.location.href).pathname.replace(/\/+$/, '');

  let triggerPaths = [];
  try {
    triggerPaths = JSON.parse(modalEl.dataset.triggerUrls || '[]').map(normalizePath);
  } catch (e) {
    return;
  }

  // Intercept every link that points to the project request page.
  document.addEventListener('click', (e) => {
    const link = e.target.closest('a[href]');

    if ( ! link || modalEl.contains(link) || e.metaKey || e.ctrlKey || e.shiftKey ) {
      return;
    }

    const url = new URL(link.href, window.location.href);

    if ( url.origin !== window.location.origin || ! triggerPaths.includes(normalizePath(url.href)) ) {
      return;
    }

    e.preventDefault();

    // Close the mobile menu if the link was clicked from there.
    const navCollapse = link.closest('.navbar-collapse.show');
    if ( navCollapse ) {
      Collapse.getOrCreateInstance(navCollapse).hide();
      document.querySelector('.animated-icon2')?.classList.remove('open');
    }

    modal.show();
  });

  // Pause the page smooth scroll while the modal is open, and flag the body
  // so the (shared) Bootstrap backdrop gets the blurred glass style.
  modalEl.addEventListener('show.bs.modal', () => {
    lenis.stop();
    document.body.classList.add('start-project-modal-open');
  });
  modalEl.addEventListener('hidden.bs.modal', () => {
    lenis.start();
    document.body.classList.remove('start-project-modal-open');
  });

  // "Only send a message" link: close the modal and scroll to the contact form if it is on this page.
  const messageLink = modalEl.querySelector('.js-start-project-message-link');
  if ( messageLink ) {
    messageLink.addEventListener('click', (e) => {
      const target = document.getElementById('section-form');

      if ( ! target ) {
        return;
      }

      e.preventDefault();
      modalEl.addEventListener('hidden.bs.modal', () => lenis.scrollTo(target, { offset: -100 }), { once: true });
      modal.hide();
    });
  }
});
