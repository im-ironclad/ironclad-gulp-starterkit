import './polyfills';
import components from './utilities/components';

((function domReady() {
  components.forEach(component => {
    // Get all the component els on the page
    const componentEls = document.querySelectorAll(component.elsSelector);

    // For each el make it a new component and initiate
    componentEls.forEach(el => {
      el = new component.Component({
        parent: el,
      });
      el.init();
    });
  });
})());
