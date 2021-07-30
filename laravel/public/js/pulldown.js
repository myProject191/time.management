/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/pulldown.js ***!
  \**********************************/
(function () {
  document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('dropdown__btn');

    if (btn) {
      btn.addEventListener('click', function () {
        this.classList.toggle('is-open');
      });
    }
  });
})();

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('dropbtn_tasks');

    if (btn) {
      btn.addEventListener('click', function () {
        this.classList.toggle('is-open');
      });
    }
  });
})();

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('add_category');

    if (btn) {
      btn.addEventListener('click', function () {
        this.classList.toggle('is-open');
      });
    }
  });
})();

var button = document.getElementById("dropbtn_tasks");
var rotateBool = true;
button.addEventListener("click", function () {
  if (rotateBool) {
    document.getElementById("taskTriangle").style.transform = "rotate(90deg)";
    rotateBool = false;
  } else {
    document.getElementById("taskTriangle").style.transform = "rotate(0deg)";
    rotateBool = true;
  }
});
var todayButton = document.getElementById("dropdown__btn");
var rotateBool2 = true;
todayButton.addEventListener("click", function () {
  if (rotateBool2) {
    document.getElementById("todayTriangle").style.transform = "rotate(90deg)";
    rotateBool2 = false;
  } else {
    document.getElementById("todayTriangle").style.transform = "rotate(0deg)";
    rotateBool2 = true;
  }
});
/******/ })()
;