import Helpers from "@scripts/helpers/helpers.js";

export default class PopupForm extends Helpers {
  constructor() {
    super();
    this.header = document.querySelector('header');
    this.popup = document.querySelector('.popup-wrapper');
    this.popupOpen = false;
    if (this.popup) {
      Helpers.registerHandler('click', this.openPopup.bind(this), 'a[href*="#popup-form"]');
      Helpers.registerHandler('click', this.closePopup.bind(this), '.popup-close');
      Helpers.registerHandler('click', this.closePopup.bind(this), '.popup-overlay');
      Helpers.registerHandlerKeydown('keydown', this.keyDown.bind(this), 27);
    }
  }

  openPopup() {
    this.popupOpen = true;
    this.popup.classList.add('popup-visible');
    this.header.classList.contains('menu-open') && this.header.classList.remove('menu-open');
    this.disableScroll();
  }

  closePopup() {
    this.popupOpen = false;
    this.popup.classList.remove('popup-visible');
    this.enableScroll();
  }

  keyDown() {
    this.popupOpen && this.closePopup();
  }
}
