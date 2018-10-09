/**
 * Intro Component
 *
 * Create selectors for all encapsulated elements to manipulate
 * - Selectors
 * -- Person Slider Selectors
 * -- Image Slider Selectors
 */
const selectors = {
  personSliderSelectors: {
    gridSelector: '.js-grid',
    namesSelector: '.js-people-names',
    copySelector: '.js-grid-copy',
    peopleSelector: '.js-people',
    slidersSelector: '.js-image-slider',
    sliderIndexes: '.js-index',
    controlPrevSelector: '.portfolio-slider__left-cont__name-cont__controls__prev',
    controlNextSelector: '.portfolio-slider__left-cont__name-cont__controls__next',
  },
  imageSliders: '.js-image-slider',
  imageSliderSelectors: {
    slidesSelector: '.js-slide',
    currentImageNumElSelector: '.js-current-image-num',
    totalImageNumElSelector: '.js-total-image-num',
    controlPrevSelector: '.js-prev',
    controlNextSelector: '.js-next',
  },
};

/**
 * [PersonSlider - standalone slider for switching between items/groups]
 */
class PersonSlider {
  constructor({
    parent,
    gridSelector,
    namesSelector,
    copySelector,
    peopleSelector,
    slidersSelector,
    sliderIndexes,
    controlPrevSelector,
    controlNextSelector
  }) {
    this.parent = parent;
    this.grid = document.querySelector(gridSelector);
    this.sliderNames = this.parent.querySelectorAll(namesSelector);
    this.copy = Array.from(this.grid.querySelectorAll(copySelector));
    this.people = Array.from(this.grid.querySelectorAll(peopleSelector));
    this.sliders = Array.from(this.parent.querySelectorAll(slidersSelector));
    this.sliderIndexes = Array.from(this.parent.querySelectorAll(sliderIndexes));
    this.controlPrev = this.parent.querySelector(controlPrevSelector);
    this.controlNext = this.parent.querySelector(controlNextSelector);
    this.currentIndex = 0;
  }

  init() {
    this.setListeners();
  }

  setListeners() {
    this.controlPrev.addEventListener('click', () => {
      this.handlePrev();
    });
    this.controlNext.addEventListener('click', () => {
      this.handleNext();
    });
  }

  handlePrev() {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.people.length - 1;
    }
    this.setActiveClass();
  }

  handleNext() {
    this.currentIndex++;
    if (this.currentIndex > this.people.length - 1) {
      this.currentIndex = 0;
    }
    this.setActiveClass();
  }

  setActiveClass() {
    this.sliderNames.forEach((name, i) => {
      name.classList.toggle('active', i === this.currentIndex);
    });
    this.copy.forEach((pTag, i) => {
      pTag.classList.toggle('active', i === this.currentIndex);
    });
    this.people.forEach((person, i) => {
      person.classList.toggle('active', i === this.currentIndex);
    });
    this.sliders.forEach((slide, i) => {
      slide.classList.toggle('active', i === this.currentIndex);
    });
    this.sliderIndexes.forEach((slideIndex, i) => {
      slideIndex.classList.toggle('active', i === this.currentIndex);
    });
  }
}

/**
 * [ImageSlider - Standalone image slider for each item/group]
 */
class ImageSlider {
  constructor({
    parent,
    slidesSelector,
    currentImageNumElSelector,
    totalImageNumElSelector,
    controlPrevSelector,
    controlNextSelector
  }) {
    this.parent = parent;
    this.slides = Array.from(this.parent.querySelectorAll(slidesSelector));
    this.currentImageNumEl = this.parent.querySelector(currentImageNumElSelector);
    this.totalImageNumEl = this.parent.querySelector(totalImageNumElSelector);
    this.controlPrev = this.parent.querySelector(controlPrevSelector);
    this.controlNext = this.parent.querySelector(controlNextSelector);
    this.currentIndex = 0;
    this.totalImageNum = this.slides.length;
  }

  init() {
    this.setTotalPageNum();
    this.setListeners();
  }

  setListeners() {
    this.controlPrev.addEventListener('click', () => {
      this.handlePrev();
    });
    this.controlNext.addEventListener('click', () => {
      this.handleNext();
    });
  }

  handlePrev() {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.slides.length - 1;
    }
    this.setActiveClass(this.slides);
    this.setCurrentImageNum(this.currentImageNumEl, this.currentIndex);
  }

  handleNext() {
    this.currentIndex++;
    if (this.currentIndex > this.slides.length - 1) {
      this.currentIndex = 0;
    }
    this.setActiveClass();
    this.setCurrentImageNum();
  }

  setActiveClass() {
    this.slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === this.currentIndex);
    });
  }

  setCurrentImageNum() {
    this.currentImageNumEl.innerHTML = this.currentIndex + 1;
  }

  setTotalPageNum() {
    this.totalImageNumEl.innerHTML = this.totalImageNum;
  }
}

export default class PortfolioSlider {
  constructor({ parent }) {
    this.parent = parent;
    this.personSlider = new PersonSlider({
      parent: this.parent,
      gridSelector: selectors.personSliderSelectors.gridSelector,
      namesSelector: selectors.personSliderSelectors.namesSelector,
      copySelector: selectors.personSliderSelectors.copySelector,
      peopleSelector: selectors.personSliderSelectors.peopleSelector,
      slidersSelector: selectors.personSliderSelectors.slidersSelector,
      sliderIndexes: selectors.personSliderSelectors.sliderIndexes,
      controlPrevSelector: selectors.personSliderSelectors.controlPrevSelector,
      controlNextSelector: selectors.personSliderSelectors.controlNextSelector,
    });
    this.imageSliders = this.parent.querySelectorAll(selectors.imageSliders);
  }

  init() {
    this.personSlider.init();
    this.imageSliders.forEach(slider => {
      slider = new ImageSlider({
        parent: slider,
        slidesSelector: selectors.imageSliderSelectors.slidesSelector,
        currentImageNumElSelector: selectors.imageSliderSelectors.currentImageNumElSelector,
        totalImageNumElSelector: selectors.imageSliderSelectors.totalImageNumElSelector,
        controlPrevSelector: selectors.imageSliderSelectors.controlPrevSelector,
        controlNextSelector: selectors.imageSliderSelectors.controlNextSelector,
      });
      slider.init();
    });
  }
}