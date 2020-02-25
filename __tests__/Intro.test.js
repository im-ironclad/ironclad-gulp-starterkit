// Import Component(s) to test
import Intro from '../src/scripts/components/Intro';

// Create Mockups
jest.mock('../src/scripts/components/Intro');

describe('Intro Component', () => {
  // Clear our mocks on each test
  beforeEach(() => {
    Intro.mockClear();
  });

  // Test that the component initializes
  it('Properly initializes', () => {
    expect(Intro).toHaveBeenCalledTimes(0);
    const testIntro = new Intro();
    expect(Intro).toHaveBeenCalled();
  });
});
