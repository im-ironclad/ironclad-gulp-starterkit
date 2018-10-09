import Intro from '../components/Intro';
import Outro from '../components/Outro';
import PortfolioSlider from '../components/PortfolioSlider';

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

export default components;
