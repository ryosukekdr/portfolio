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

eval("//↓ローディングアニメーション\nvar grey = document.querySelector('#loading');\nvar green = document.querySelector('#loading-screen');\nvar spin = document.querySelector('.spin');\nwindow.addEventListener('load', function () {\n  //グレースクリーン\n  grey.animate({\n    opacity: [1, 0],\n    visibility: 'hidden'\n  }, {\n    duration: 2000,\n    delay: 1200,\n    fill: 'forwards',\n    easing: 'ease'\n  });\n\n  //緑スクリーン\n  green.animate({\n    translate: ['0 100%', '0 0', '0 -100%']\n  }, {\n    duration: 2000,\n    delay: 800,\n    fill: 'forwards',\n    easing: 'ease'\n  });\n\n  //ローディングスピン画像\n  spin.animate({\n    opacity: [1, 0]\n  }, {\n    duration: 1200,\n    fill: 'forwards',\n    easing: 'ease'\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJncmV5IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZ3JlZW4iLCJzcGluIiwid2luZG93IiwiYWRkRXZlbnRMaXN0ZW5lciIsImFuaW1hdGUiLCJvcGFjaXR5IiwidmlzaWJpbGl0eSIsImR1cmF0aW9uIiwiZGVsYXkiLCJmaWxsIiwiZWFzaW5nIiwidHJhbnNsYXRlIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9sb2FkaW5nLmpzP2Y2YTgiXSwic291cmNlc0NvbnRlbnQiOlsiLy/ihpPjg63jg7zjg4fjgqPjg7PjgrDjgqLjg4vjg6Hjg7zjgrfjg6fjg7NcbmNvbnN0IGdyZXkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbG9hZGluZycpO1xuY29uc3QgZ3JlZW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbG9hZGluZy1zY3JlZW4nKTtcbmNvbnN0IHNwaW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc3BpbicpO1xuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsICgpID0+IHtcbiAgICAvL+OCsOODrOODvOOCueOCr+ODquODvOODs1xuICAgIGdyZXkuYW5pbWF0ZShcbiAgICAgICAge1xuICAgICAgICAgICAgb3BhY2l0eTogWzEsIDBdLFxuICAgICAgICAgICAgdmlzaWJpbGl0eTogJ2hpZGRlbicsXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGR1cmF0aW9uOiAyMDAwLFxuICAgICAgICAgICAgZGVsYXk6IDEyMDAsXG4gICAgICAgICAgICBmaWxsOiAnZm9yd2FyZHMnLFxuICAgICAgICAgICAgZWFzaW5nOiAnZWFzZScsXG4gICAgICAgIH1cbiAgICApO1xuICAgIFxuICAgIC8v57eR44K544Kv44Oq44O844OzXG4gICAgZ3JlZW4uYW5pbWF0ZShcbiAgICAgICAge1xuICAgICAgICAgICAgdHJhbnNsYXRlOiBbJzAgMTAwJScsICcwIDAnLCAnMCAtMTAwJSddLFxuICAgICAgICB9LFxuICAgICAgICB7XG4gICAgICAgICAgICBkdXJhdGlvbjogMjAwMCxcbiAgICAgICAgICAgIGRlbGF5OiA4MDAsXG4gICAgICAgICAgICBmaWxsOiAnZm9yd2FyZHMnLFxuICAgICAgICAgICAgZWFzaW5nOiAnZWFzZScsXG4gICAgICAgIH1cbiAgICApO1xuICAgIFxuICAgIC8v44Ot44O844OH44Kj44Oz44Kw44K544OU44Oz55S75YOPXG4gICAgc3Bpbi5hbmltYXRlKFxuICAgICAgICB7XG4gICAgICAgICAgICBvcGFjaXR5OiBbMSwgMF0sXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGR1cmF0aW9uOiAxMjAwLFxuICAgICAgICAgICAgZmlsbDogJ2ZvcndhcmRzJyxcbiAgICAgICAgICAgIGVhc2luZzogJ2Vhc2UnLFxuICAgICAgICB9XG4gICAgKTtcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQSxJQUFNQSxJQUFJLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFVBQVUsQ0FBQztBQUMvQyxJQUFNQyxLQUFLLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLGlCQUFpQixDQUFDO0FBQ3ZELElBQU1FLElBQUksR0FBR0gsUUFBUSxDQUFDQyxhQUFhLENBQUMsT0FBTyxDQUFDO0FBRTVDRyxNQUFNLENBQUNDLGdCQUFnQixDQUFDLE1BQU0sRUFBRSxZQUFNO0VBQ2xDO0VBQ0FOLElBQUksQ0FBQ08sT0FBTyxDQUNSO0lBQ0lDLE9BQU8sRUFBRSxDQUFDLENBQUMsRUFBRSxDQUFDLENBQUM7SUFDZkMsVUFBVSxFQUFFO0VBQ2hCLENBQUMsRUFDRDtJQUNJQyxRQUFRLEVBQUUsSUFBSTtJQUNkQyxLQUFLLEVBQUUsSUFBSTtJQUNYQyxJQUFJLEVBQUUsVUFBVTtJQUNoQkMsTUFBTSxFQUFFO0VBQ1osQ0FDSixDQUFDOztFQUVEO0VBQ0FWLEtBQUssQ0FBQ0ksT0FBTyxDQUNUO0lBQ0lPLFNBQVMsRUFBRSxDQUFDLFFBQVEsRUFBRSxLQUFLLEVBQUUsU0FBUztFQUMxQyxDQUFDLEVBQ0Q7SUFDSUosUUFBUSxFQUFFLElBQUk7SUFDZEMsS0FBSyxFQUFFLEdBQUc7SUFDVkMsSUFBSSxFQUFFLFVBQVU7SUFDaEJDLE1BQU0sRUFBRTtFQUNaLENBQ0osQ0FBQzs7RUFFRDtFQUNBVCxJQUFJLENBQUNHLE9BQU8sQ0FDUjtJQUNJQyxPQUFPLEVBQUUsQ0FBQyxDQUFDLEVBQUUsQ0FBQztFQUNsQixDQUFDLEVBQ0Q7SUFDSUUsUUFBUSxFQUFFLElBQUk7SUFDZEUsSUFBSSxFQUFFLFVBQVU7SUFDaEJDLE1BQU0sRUFBRTtFQUNaLENBQ0osQ0FBQztBQUNMLENBQUMsQ0FBQyIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9sb2FkaW5nLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/loading.js\n");

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