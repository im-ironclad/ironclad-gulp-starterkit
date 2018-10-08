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
    console.log(this.parent); // eslint-disable-line
    console.log(this.heading); //eslint-disable-line
  }
}
