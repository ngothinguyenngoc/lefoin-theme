
/*
========================================
Le Foin Framework
Bootstrap Script
========================================
*/

import {
  renderAuth,
} from "../../components/auth/auth.js";

function init() {
  console.log(
    "🚀 Le Foin Framework Loaded"
  );

  // Initialize Auth Component
  renderAuth();

  // Future modules
  // renderNavbar();
  // renderWallet();
  // renderProfile();
  // renderMembership();
}

document.addEventListener(
  "DOMContentLoaded",
  init
);

export { init };

