import inputLabel from './components/input-label.js';
import showHidePassword from './components/show-hide-password.js';
import minMaxSidebar from './components/min-max-sidebar.js';
import search from './components/search.js';
require('./bootstrap');

const main = () => {
  inputLabel.render();
  showHidePassword.render();
  minMaxSidebar.render();
  search.render();
};

main();