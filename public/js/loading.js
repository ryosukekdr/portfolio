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

/***/ "./resources/js/loading.js":
/*!*********************************!*\
  !*** ./resources/js/loading.js ***!
  \*********************************/
/***/ (() => {

eval("//↓ローディングアニメーション\nvar grey = document.querySelector('#loading');\nvar green = document.querySelector('#loading-screen');\nvar spin = document.querySelector('.spin');\nwindow.addEventListener('load', function () {\n  //グレースクリーン\n  grey.animate({\n    opacity: [1, 0],\n    visibility: 'hidden'\n  }, {\n    duration: 500,\n    delay: 600,\n    fill: 'forwards',\n    easing: 'ease'\n  });\n\n  //緑スクリーン\n  green.animate({\n    translate: ['0 100%', '0 0', '0 -100%']\n  }, {\n    duration: 500,\n    delay: 400,\n    fill: 'forwards',\n    easing: 'ease'\n  });\n\n  //ローディングスピン画像\n  spin.animate({\n    opacity: [1, 0]\n  }, {\n    duration: 800,\n    fill: 'forwards',\n    easing: 'ease'\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJncmV5IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZ3JlZW4iLCJzcGluIiwid2luZG93IiwiYWRkRXZlbnRMaXN0ZW5lciIsImFuaW1hdGUiLCJvcGFjaXR5IiwidmlzaWJpbGl0eSIsImR1cmF0aW9uIiwiZGVsYXkiLCJmaWxsIiwiZWFzaW5nIiwidHJhbnNsYXRlIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9sb2FkaW5nLmpzP2Y2YTgiXSwic291cmNlc0NvbnRlbnQiOlsiLy/ihpPjg63jg7zjg4fjgqPjg7PjgrDjgqLjg4vjg6Hjg7zjgrfjg6fjg7NcbmNvbnN0IGdyZXkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbG9hZGluZycpO1xuY29uc3QgZ3JlZW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbG9hZGluZy1zY3JlZW4nKTtcbmNvbnN0IHNwaW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc3BpbicpO1xuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsICgpID0+IHtcbiAgICAvL+OCsOODrOODvOOCueOCr+ODquODvOODs1xuICAgIGdyZXkuYW5pbWF0ZShcbiAgICAgICAge1xuICAgICAgICAgICAgb3BhY2l0eTogWzEsIDBdLFxuICAgICAgICAgICAgdmlzaWJpbGl0eTogJ2hpZGRlbicsXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGR1cmF0aW9uOiA1MDAsXG4gICAgICAgICAgICBkZWxheTogNjAwLFxuICAgICAgICAgICAgZmlsbDogJ2ZvcndhcmRzJyxcbiAgICAgICAgICAgIGVhc2luZzogJ2Vhc2UnLFxuICAgICAgICB9XG4gICAgKTtcbiAgICBcbiAgICAvL+e3keOCueOCr+ODquODvOODs1xuICAgIGdyZWVuLmFuaW1hdGUoXG4gICAgICAgIHtcbiAgICAgICAgICAgIHRyYW5zbGF0ZTogWycwIDEwMCUnLCAnMCAwJywgJzAgLTEwMCUnXSxcbiAgICAgICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgZHVyYXRpb246IDUwMCxcbiAgICAgICAgICAgIGRlbGF5OiA0MDAsXG4gICAgICAgICAgICBmaWxsOiAnZm9yd2FyZHMnLFxuICAgICAgICAgICAgZWFzaW5nOiAnZWFzZScsXG4gICAgICAgIH1cbiAgICApO1xuICAgIFxuICAgIC8v44Ot44O844OH44Kj44Oz44Kw44K544OU44Oz55S75YOPXG4gICAgc3Bpbi5hbmltYXRlKFxuICAgICAgICB7XG4gICAgICAgICAgICBvcGFjaXR5OiBbMSwgMF0sXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGR1cmF0aW9uOiA4MDAsXG4gICAgICAgICAgICBmaWxsOiAnZm9yd2FyZHMnLFxuICAgICAgICAgICAgZWFzaW5nOiAnZWFzZScsXG4gICAgICAgIH1cbiAgICApO1xufSk7Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBLElBQU1BLElBQUksR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsVUFBVSxDQUFDO0FBQy9DLElBQU1DLEtBQUssR0FBR0YsUUFBUSxDQUFDQyxhQUFhLENBQUMsaUJBQWlCLENBQUM7QUFDdkQsSUFBTUUsSUFBSSxHQUFHSCxRQUFRLENBQUNDLGFBQWEsQ0FBQyxPQUFPLENBQUM7QUFFNUNHLE1BQU0sQ0FBQ0MsZ0JBQWdCLENBQUMsTUFBTSxFQUFFLFlBQU07RUFDbEM7RUFDQU4sSUFBSSxDQUFDTyxPQUFPLENBQ1I7SUFDSUMsT0FBTyxFQUFFLENBQUMsQ0FBQyxFQUFFLENBQUMsQ0FBQztJQUNmQyxVQUFVLEVBQUU7RUFDaEIsQ0FBQyxFQUNEO0lBQ0lDLFFBQVEsRUFBRSxHQUFHO0lBQ2JDLEtBQUssRUFBRSxHQUFHO0lBQ1ZDLElBQUksRUFBRSxVQUFVO0lBQ2hCQyxNQUFNLEVBQUU7RUFDWixDQUNKLENBQUM7O0VBRUQ7RUFDQVYsS0FBSyxDQUFDSSxPQUFPLENBQ1Q7SUFDSU8sU0FBUyxFQUFFLENBQUMsUUFBUSxFQUFFLEtBQUssRUFBRSxTQUFTO0VBQzFDLENBQUMsRUFDRDtJQUNJSixRQUFRLEVBQUUsR0FBRztJQUNiQyxLQUFLLEVBQUUsR0FBRztJQUNWQyxJQUFJLEVBQUUsVUFBVTtJQUNoQkMsTUFBTSxFQUFFO0VBQ1osQ0FDSixDQUFDOztFQUVEO0VBQ0FULElBQUksQ0FBQ0csT0FBTyxDQUNSO0lBQ0lDLE9BQU8sRUFBRSxDQUFDLENBQUMsRUFBRSxDQUFDO0VBQ2xCLENBQUMsRUFDRDtJQUNJRSxRQUFRLEVBQUUsR0FBRztJQUNiRSxJQUFJLEVBQUUsVUFBVTtJQUNoQkMsTUFBTSxFQUFFO0VBQ1osQ0FDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2xvYWRpbmcuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/loading.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/loading.js"]();
/******/ 	
/******/ })()
;