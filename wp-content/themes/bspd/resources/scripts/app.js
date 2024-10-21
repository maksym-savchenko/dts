import domReady from '@roots/sage/client/dom-ready';
import Accordion from "@scripts/modules/accordion.js";
import HeaderMenu from "@scripts/modules/header-menu.js";
import PopupForm from "@scripts/modules/popupForm.js";
import smoothScrollToAnchor from "@scripts/modules/smoothScrollToAnchor.js";
import SmoothScrollToAnchor from "@scripts/modules/smoothScrollToAnchor.js";
import Vacancies from "@scripts/modules/vacancies.js";

/**
 * Application entrypoint
 */
domReady(async () => {
  document.querySelector('.wp-block-accordion') && new Accordion();
  document.querySelector('.wp-block-vacancies') && new Vacancies();
  new HeaderMenu();

  new PopupForm();

 new SmoothScrollToAnchor();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
