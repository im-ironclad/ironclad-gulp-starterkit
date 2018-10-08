/**
 * Intro Component
 *
 * Create selectors for all encapsulated elements to manipulate
 * - Heading
 */
const headingSelector = '.intro__heading';

export default class Intro {
  constructor({ parent }) {
    this.parent = parent;
    this.heading = parent.querySelector(headingSelector);
  }

  init() {
    this.setListeners();
  }

  setListeners() {
    this.heading.addEventListener('click', e => console.log(e.target));
  }
}
