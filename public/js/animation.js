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

/***/ "./resources/js/animation.js":
/*!***********************************!*\
  !*** ./resources/js/animation.js ***!
  \***********************************/
/***/ (() => {

eval("var showImage = function showImage(entries, obs) {\n  //entries.forEach((entry) => {\n  //if (entry.isIntersecting) {\n  entries[0].target.animate({\n    opacity: [0, 1],\n    //translate: ['200px 0', 0],\n    filter: ['blur(.4rem)', 'blur(0)'],\n    translate: ['0 4rem', 0]\n  }, {\n    duration: 1000,\n    easing: 'ease',\n    fill: 'forwards'\n  });\n  //animateが１度発動したら監視をやめる。obsはimageObserverの別名。\n  obs.unobserve(entries[0].target);\n  //}\n  //});\n};\n\nvar options = {\n  threshold: 1\n};\n\n//監視設定\nvar imageObserver = new IntersectionObserver(showImage, options);\n\n//.motion-imageを監視するよう指示\nvar target_images = document.querySelectorAll('.motion-image');\ntarget_images.forEach(function (target_image) {\n  imageObserver.observe(target_image);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJzaG93SW1hZ2UiLCJlbnRyaWVzIiwib2JzIiwidGFyZ2V0IiwiYW5pbWF0ZSIsIm9wYWNpdHkiLCJmaWx0ZXIiLCJ0cmFuc2xhdGUiLCJkdXJhdGlvbiIsImVhc2luZyIsImZpbGwiLCJ1bm9ic2VydmUiLCJvcHRpb25zIiwidGhyZXNob2xkIiwiaW1hZ2VPYnNlcnZlciIsIkludGVyc2VjdGlvbk9ic2VydmVyIiwidGFyZ2V0X2ltYWdlcyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJ0YXJnZXRfaW1hZ2UiLCJvYnNlcnZlIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hbmltYXRpb24uanM/ODViNCJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBzaG93SW1hZ2UgPSAoZW50cmllcywgb2JzKSA9PiB7XG4gICAgLy9lbnRyaWVzLmZvckVhY2goKGVudHJ5KSA9PiB7XG4gICAgICAgIC8vaWYgKGVudHJ5LmlzSW50ZXJzZWN0aW5nKSB7XG4gICAgICAgICAgICBlbnRyaWVzWzBdLnRhcmdldC5hbmltYXRlKFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgb3BhY2l0eTogWzAsIDFdLFxuICAgICAgICAgICAgICAgICAgICAvL3RyYW5zbGF0ZTogWycyMDBweCAwJywgMF0sXG4gICAgICAgICAgICAgICAgICAgIGZpbHRlcjogWydibHVyKC40cmVtKScsICdibHVyKDApJ10sXG4gICAgICAgICAgICAgICAgICAgIHRyYW5zbGF0ZTogWycwIDRyZW0nLCAwXSxcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDEwMDAsXG4gICAgICAgICAgICAgICAgICAgIGVhc2luZzogJ2Vhc2UnLFxuICAgICAgICAgICAgICAgICAgICBmaWxsOiAnZm9yd2FyZHMnLFxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICk7XG4gICAgICAgICAgICAvL2FuaW1hdGXjgYzvvJHluqbnmbrli5XjgZfjgZ/jgonnm6PoppbjgpLjgoTjgoHjgovjgIJvYnPjga9pbWFnZU9ic2VydmVy44Gu5Yil5ZCN44CCXG4gICAgICAgICAgICBvYnMudW5vYnNlcnZlKGVudHJpZXNbMF0udGFyZ2V0KTtcbiAgICAgICAgLy99XG4gICAgLy99KTtcbn07XG5cbmNvbnN0IG9wdGlvbnMgPSB7XG4gICAgdGhyZXNob2xkOiAxXG59O1xuXG4vL+ebo+imluioreWumlxuY29uc3QgaW1hZ2VPYnNlcnZlciA9IG5ldyBJbnRlcnNlY3Rpb25PYnNlcnZlcihzaG93SW1hZ2UsIG9wdGlvbnMpO1xuXG4vLy5tb3Rpb24taW1hZ2XjgpLnm6PoppbjgZnjgovjgojjgYbmjIfnpLpcbmNvbnN0IHRhcmdldF9pbWFnZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubW90aW9uLWltYWdlJyk7XG5cbnRhcmdldF9pbWFnZXMuZm9yRWFjaCgodGFyZ2V0X2ltYWdlKSA9PiB7XG4gICAgaW1hZ2VPYnNlcnZlci5vYnNlcnZlKHRhcmdldF9pbWFnZSk7XG59KTsiXSwibWFwcGluZ3MiOiJBQUFBLElBQU1BLFNBQVMsR0FBRyxTQUFaQSxTQUFTQSxDQUFJQyxPQUFPLEVBQUVDLEdBQUcsRUFBSztFQUNoQztFQUNJO0VBQ0lELE9BQU8sQ0FBQyxDQUFDLENBQUMsQ0FBQ0UsTUFBTSxDQUFDQyxPQUFPLENBQ3JCO0lBQ0lDLE9BQU8sRUFBRSxDQUFDLENBQUMsRUFBRSxDQUFDLENBQUM7SUFDZjtJQUNBQyxNQUFNLEVBQUUsQ0FBQyxhQUFhLEVBQUUsU0FBUyxDQUFDO0lBQ2xDQyxTQUFTLEVBQUUsQ0FBQyxRQUFRLEVBQUUsQ0FBQztFQUMzQixDQUFDLEVBQ0Q7SUFDSUMsUUFBUSxFQUFFLElBQUk7SUFDZEMsTUFBTSxFQUFFLE1BQU07SUFDZEMsSUFBSSxFQUFFO0VBQ1YsQ0FDSixDQUFDO0VBQ0Q7RUFDQVIsR0FBRyxDQUFDUyxTQUFTLENBQUNWLE9BQU8sQ0FBQyxDQUFDLENBQUMsQ0FBQ0UsTUFBTSxDQUFDO0VBQ3BDO0VBQ0o7QUFDSixDQUFDOztBQUVELElBQU1TLE9BQU8sR0FBRztFQUNaQyxTQUFTLEVBQUU7QUFDZixDQUFDOztBQUVEO0FBQ0EsSUFBTUMsYUFBYSxHQUFHLElBQUlDLG9CQUFvQixDQUFDZixTQUFTLEVBQUVZLE9BQU8sQ0FBQzs7QUFFbEU7QUFDQSxJQUFNSSxhQUFhLEdBQUdDLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsZUFBZSxDQUFDO0FBRWhFRixhQUFhLENBQUNHLE9BQU8sQ0FBQyxVQUFDQyxZQUFZLEVBQUs7RUFDcENOLGFBQWEsQ0FBQ08sT0FBTyxDQUFDRCxZQUFZLENBQUM7QUFDdkMsQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FuaW1hdGlvbi5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/animation.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/animation.js"]();
/******/ 	
/******/ })()
;