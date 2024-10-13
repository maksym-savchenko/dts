import Helpers from "@scripts/helpers/helpers.js";

export default class HeaderMenu extends Helpers {
  constructor() {
    super();
    this.menuIsOpen = false;
    this.header = document.querySelector('.header');
    Helpers.registerHandler('click', this.toggleMenuHandler.bind(this), '.menu-toggle');
    Helpers.registerHandler('click', this.closeMenu.bind(this), '.header-overlay');
    Helpers.registerHandlerKeydown('keydown', this.keyDown.bind(this), 27);
    Helpers.registerHandler('scroll', this.scrollHandler.bind(this));
  }

  toggleMenuHandler() {
    this.header.classList.contains('menu-open') ? this.closeMenu() :  this.openMenu();
  }

  openMenu() {
    this.menuIsOpen = true;
    this.disableScroll();
    this.header.classList.add('menu-open');
  }

  closeMenu() {
    this.menuIsOpen = false;
    this.enableScroll();
    this.header.classList.remove('menu-open');
  }

  keyDown() {
     if (this.menuIsOpen) {
       this.closeMenu();
     }
  }

  scrollHandler() {
    const shouldBeSticky = window.scrollY > 0;
    if (shouldBeSticky) {
      this.header.classList.add('scrolled');
    } else {
      this.header.classList.remove('scrolled');
    }
  }
}
