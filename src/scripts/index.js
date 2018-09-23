import testFunc from './test';

((function domReady() {
  const planet = 'world';
  console.log(`Hello ${planet}`); //eslint-disable-line
  testFunc();
})());
