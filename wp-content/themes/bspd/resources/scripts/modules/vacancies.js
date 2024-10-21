import Helpers from "@scripts/helpers/helpers.js";
class Accordion extends Helpers {
  constructor() {
    super();
    this.vacancies = document.querySelector('.vacancies-wrapper');
    this.vacancies && Helpers.registerHandler('click', this.handleClick.bind(this), '.vacancies-btn');
  }

  handleClick(target) {
    if(!target) return;
    const wrapper = target.previousElementSibling;
    this.showItems(wrapper);
    target.remove();
  }

  showItems(wrapper) {
    wrapper.querySelectorAll('.vacancies-item.hidden').forEach(item => {
      item.classList.remove('hidden');
    })
  }
}

export default Accordion;
