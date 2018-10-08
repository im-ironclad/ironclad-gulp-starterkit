import Intro from './components/Intro';
import Outro from './components/Outro';

((function domReady() {
  console.time('total');

  const components = [
    {
      Component: Intro,
      elsSelector: '.intro',
    },
    {
      Component: Outro,
      elsSelector: '.outro',
    },
  ];

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

  console.timeEnd('total');
})());
