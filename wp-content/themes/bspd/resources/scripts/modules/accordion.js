import Helpers from "@scripts/helpers/helpers.js";
class Accordion extends Helpers {
  constructor(accordion) {
    super();
    this.accordion = accordion;
    Helpers.registerHandler('click', this.handleClick.bind(this), '.accordion-item');
  }

  handleClick(target) {
    if(!target) return;
    const item = target.closest('.accordion-item');
    this.toggleItem(item);
  }

  toggleItem(item) {
    item.classList.toggle('active');
  }
}

export default Accordion;
