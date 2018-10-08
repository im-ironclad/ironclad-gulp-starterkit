import Intro from './components/Intro';
import Outro from './components/Outro';
import PortfolioSlider from './components/PortfolioSlider';

((function domReady() {
  const components = [
    {
      Component: Intro,
      elsSelector: '.intro',
    },
    {
      Component: Outro,
      elsSelector: '.outro',
    },
    {
      Component: PortfolioSlider,
      elsSelector: '.portfolio-slider',
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
})());
