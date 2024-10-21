export default class Helpers {
  constructor() {
    if (!Helpers.isInitialized) {
      //Init once
      this.initClick();
      this.initScroll();
      this.initResize();
      this.initKeydown();
      Helpers.isInitialized = true;
      Helpers.windowWidth = window.innerWidth;
      if (!Helpers.handlers) Helpers.handlers = {};
    }
  }
  initKeydown() {
    document.addEventListener('keydown', (event) => {
      if (Helpers.handlers['keydown']) {
        Helpers.handlers['keydown'].forEach(obj => {
          if (event.keyCode === obj.key) {
            if (obj.onFocus && obj.target) {
              setTimeout(() => {
                if (document.activeElement.classList.contains(obj.target.substring(1))) {
                  obj.handle(document.activeElement, obj.key);
                }
              }, 0);
              return;
            }
            obj.handle();
          }
        });
      }
    });
  }

  initClick() {
    document.addEventListener('click', (event) => {
      const eventTarget = event.target;
      if (Helpers.handlers['click']) {
        Helpers.handlers['click'].forEach(obj => {
          const closestTarget = eventTarget.closest(obj.target);
          if (closestTarget) obj.handle(closestTarget, event)
        });
      }
      if (Helpers.handlers['clickOutSide']) {
        Helpers.handlers['clickOutSide'].forEach(obj => {
          const closestTarget = eventTarget.closest(obj.target);
          if (!closestTarget) obj.handle(closestTarget, event)
        });
      }
    });
  }

  initScroll() {
    document.addEventListener('scroll', (event) => {
      if (Helpers.handlers['scroll']) Helpers.handlers['scroll'].forEach(obj => obj.handle(event));
    });
  }

  initResize() {
    window.addEventListener('resize', (event) => {
      if (Helpers.handlers['resize']) Helpers.handlers['resize'].forEach(obj => obj.handle(event));
    });
  }

  debounce(func, delay) {
    let timer;
    return function (...args) {
      clearTimeout(timer);
      timer = setTimeout(() => {
        func.apply(this, args);
      }, delay);
    };
  }

  static registerHandlerKeydown(eventType, handler, key, target = '', onFocus = false) {
    if (!Helpers.handlers[eventType]) Helpers.handlers[eventType] = [];
    Helpers.handlers[eventType].push({
      'handle': handler,
      'key': key,
      'target': target,
      'onFocus': onFocus,
    });
  }

  static registerHandler(eventType, handler, target = '',) {
    if (!Helpers.handlers[eventType]) Helpers.handlers[eventType] = [];
    Helpers.handlers[eventType].push({
      'handle': handler,
      'target': target,
    });
  }

  bindEventsTarget(event = ['click'], target = document, callback = () => {
  }) {
    event.forEach((eventItem) => {
      target.addEventListener(eventItem, (eventHandle) => {
        callback(target, eventHandle);
      })
    })
  }
  disableScroll() {
    const body = document.body;
    const scrollY = (body.style.top = `-${window.scrollY}px`);

    window.scrollY > 0 && body.classList.add('body-scrolled');
    body.classList.add('disable-scroll');
    body.style.top = `${scrollY}px`;
    body.style.position = 'fixed';
    body.style.left = 0;
    body.style.right = 0;
  }

  enableScroll() {
    const body = document.body;
    const doc = document.documentElement;
    const scrollY = body.style.top;

    body.classList.remove('body-scrolled');
    body.classList.remove('disable-scroll');
    doc.style.scrollBehavior = 'unset';
    body.style.position = '';
    body.style.top = '';
    body.style.left = '';
    body.style.right = '';

    window.scrollTo(0, parseInt(scrollY || '0') * -1);

    setTimeout(() => doc.style.scrollBehavior = '', 300);
  }

}

Helpers.isInitialized = false;
