import Helpers from "@scripts/helpers/helpers.js";

export default class SmoothScrollToAnchor extends Helpers {
  constructor(props) {
    super(props);
    this.offset = 120;
    this.header = document.querySelector('.header');
    this.initAnchorClick();
    this.scrollOnLoad();
  }

  scrollToAnchor(anchor, offset = this.offset) {
    const targetElement = document.querySelector(anchor);
    if (targetElement) {
      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - offset;

      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  }

  clickHandler(target) {
    const targetUrl = new URL(target.href);
    const currentPage = window.location.pathname;
    const targetPage = targetUrl.pathname;
    const targetHash = targetUrl.hash;

    if (targetHash && currentPage === targetPage) {
      if (this.header.classList.contains('menu-open')) {
        this.header.classList.remove('menu-open');
        this.enableScroll();
      }
      this.scrollToAnchor(targetHash);
      history.pushState(null, null, targetHash);
    } else {
      window.location.href = target.href;
    }
  }

  initAnchorClick() {
    document.querySelectorAll('a[href^="#"], a[href*="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => {
        e.preventDefault();
        this.clickHandler(e.target);
      });
    });
  }

  scrollOnLoad() {
    window.addEventListener('load', () => {
      const anchor = window.location.hash;
      if (anchor) {
        setTimeout(() => {
          this.scrollToAnchor(anchor);
        }, 100);
      }
    });
  }
}
