import Helpers from "@scripts/helpers/helpers.js";
class Accordion extends Helpers {
  constructor(accordion) {
    super();
    this.accordion = accordion;
    this.activeItem = null;
    Helpers.registerHandler('click', this.handleClick.bind(this), '.accordion-item__title');
  }

  handleClick(target) {
    if(!target) return;
    const item = target.closest('.accordion-item');
    this.toggleItem(item);
  }

  toggleItem(item) {
    if (item.classList.contains('active')) {
      item.classList.remove('active');
    } else {
      this.activeItem && this.activeItem.classList.remove('active');
      this.activeItem = null;
      item.classList.add('active');
      this.activeItem = item;
    }
  }
}

export default Accordion;
