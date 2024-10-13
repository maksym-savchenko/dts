import domReady from '@roots/sage/client/dom-ready';
import Accordion from "@scripts/modules/accordion.js";
import HeaderMenu from "@scripts/modules/header-menu.js";
import PopupForm from "@scripts/modules/popupForm.js";

/**
 * Application entrypoint
 */
domReady(async () => {
  [...document.querySelectorAll('.wp-block-accordion')].forEach(accordion => new Accordion(accordion));
  new HeaderMenu();

  new PopupForm();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
