import Helpers from "@scripts/helpers/helpers.js";

export default class SmoothScrollToAnchor extends Helpers {
  constructor(props) {
    super(props);
    this.offset = 120;
    this.header = document.querySelector('.header');
    this.initAnchorClick();
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
    const targetId = target.getAttribute('href');
    if (targetId !== '#') {
      if (this.header.classList.contains('menu-open')) {
        this.header.classList.remove('menu-open')
        this.enableScroll();
      }
      this.scrollToAnchor(targetId);
      history.pushState(null, null, targetId);
    }
  }

  initAnchorClick() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => {
        e.preventDefault();
        this.clickHandler(e.target);
      })
    })
  }
}
