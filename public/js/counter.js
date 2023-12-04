/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/counter.js":
/*!*********************************!*\
  !*** ./resources/js/counter.js ***!
  \*********************************/
/***/ (() => {

eval("//ブログタイトルの文字数カウンター\nvar target_text = document.querySelector('#title');\nvar count = document.querySelector('#count');\ntarget_text.addEventListener('keyup', function () {\n  count.textContent = target_text.value.length;\n  if (target_text.value.length > 255) {\n    count.classList.add('textlength_alert');\n  } else {\n    count.classList.remove('textlength_alert');\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJ0YXJnZXRfdGV4dCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImNvdW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsInRleHRDb250ZW50IiwidmFsdWUiLCJsZW5ndGgiLCJjbGFzc0xpc3QiLCJhZGQiLCJyZW1vdmUiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2NvdW50ZXIuanM/YThkNyJdLCJzb3VyY2VzQ29udGVudCI6WyIvL+ODluODreOCsOOCv+OCpOODiOODq+OBruaWh+Wtl+aVsOOCq+OCpuODs+OCv+ODvFxuY29uc3QgdGFyZ2V0X3RleHQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdGl0bGUnKTtcbmNvbnN0IGNvdW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2NvdW50Jyk7XG5cbnRhcmdldF90ZXh0LmFkZEV2ZW50TGlzdGVuZXIoJ2tleXVwJywgKCkgPT4ge1xuICAgIGNvdW50LnRleHRDb250ZW50ID0gdGFyZ2V0X3RleHQudmFsdWUubGVuZ3RoO1xuICAgIFxuICAgIGlmICh0YXJnZXRfdGV4dC52YWx1ZS5sZW5ndGggPiAyNTUpIHtcbiAgICAgICAgY291bnQuY2xhc3NMaXN0LmFkZCgndGV4dGxlbmd0aF9hbGVydCcpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIGNvdW50LmNsYXNzTGlzdC5yZW1vdmUoJ3RleHRsZW5ndGhfYWxlcnQnKTtcbiAgICB9XG59KTsiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBTUEsV0FBVyxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxRQUFRLENBQUM7QUFDcEQsSUFBTUMsS0FBSyxHQUFHRixRQUFRLENBQUNDLGFBQWEsQ0FBQyxRQUFRLENBQUM7QUFFOUNGLFdBQVcsQ0FBQ0ksZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQU07RUFDeENELEtBQUssQ0FBQ0UsV0FBVyxHQUFHTCxXQUFXLENBQUNNLEtBQUssQ0FBQ0MsTUFBTTtFQUU1QyxJQUFJUCxXQUFXLENBQUNNLEtBQUssQ0FBQ0MsTUFBTSxHQUFHLEdBQUcsRUFBRTtJQUNoQ0osS0FBSyxDQUFDSyxTQUFTLENBQUNDLEdBQUcsQ0FBQyxrQkFBa0IsQ0FBQztFQUMzQyxDQUFDLE1BQU07SUFDSE4sS0FBSyxDQUFDSyxTQUFTLENBQUNFLE1BQU0sQ0FBQyxrQkFBa0IsQ0FBQztFQUM5QztBQUNKLENBQUMsQ0FBQyIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jb3VudGVyLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/counter.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/counter.js"]();
/******/ 	
/******/ })()
;