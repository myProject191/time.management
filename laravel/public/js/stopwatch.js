/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/stopwatch.js ***!
  \***********************************/
var judge = false;
var timeBool = true;
var ssbutton = document.getElementById("ssbutton");
var start_time = document.getElementById("start_time");
var finish_time = document.getElementById("finish_time");

function getTime() {
  var now = new Date();
  var year = now.getFullYear();
  var month = ('0' + (now.getMonth() + 1)).slice(-2);
  var date = ('0' + now.getDate()).slice(-2);
  var hour = ('0' + now.getHours()).slice(-2);
  var min = ('0' + now.getMinutes()).slice(-2);
  var time = year + '-' + month + '-' + date + 'T' + hour + ':' + min;
  return time;
}

function stopwatch() {
  var nowTime = getTime();

  if (timeBool) {
    start_time.value = nowTime;
    timeBool = false;
  }

  if (judge) {
    ssbutton.value = "Pause";
    finish_time.value = nowTime;
    console.log(nowTime);
    judge = false;
  } else {
    ssbutton.value = "Restart";
    judge = true;
  }
} // if(ssbutton)：undefined,nullはfalseになる。ある時はtrueになる。


if (ssbutton) {
  ssbutton.addEventListener("click", stopwatch, false);
}
/******/ })()
;