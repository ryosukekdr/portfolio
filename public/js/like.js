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

/***/ "./resources/js/like.js":
/*!******************************!*\
  !*** ./resources/js/like.js ***!
  \******************************/
/***/ (() => {

eval("$('.like-toggle').on('click', function () {\n  var $this = $(this); //イベントが発火した要素＝iタグを代入\n  $.ajax({\n    headers: {\n      'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n    },\n    //name属性がcsrf-tokenのmetaタグのcontent属性の値を取得\n    url: '/like',\n    //ルーティング経由でLikeコントローラに飛ばす\n    type: 'POST',\n    data: {\n      'blog_id': $this.data('blog_id')\n    } ////HTMLからdata-blog_idの値を取得してコントローラに送る\n  }).done(function (data) {\n    $this.toggleClass('fas liked'); //likedクラスのON/OFF切り替え\n    $this.next('.like-counter').html(data.blog_likes_count); //コントローラからblog_likes_countという名前の「新規いいね後の総いいね数」が返ってくる\n  }).fail(function () {\n    console.log('fail');\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwib24iLCIkdGhpcyIsImFqYXgiLCJoZWFkZXJzIiwiYXR0ciIsInVybCIsInR5cGUiLCJkYXRhIiwiZG9uZSIsInRvZ2dsZUNsYXNzIiwibmV4dCIsImh0bWwiLCJibG9nX2xpa2VzX2NvdW50IiwiZmFpbCIsImNvbnNvbGUiLCJsb2ciXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2xpa2UuanM/OTI3YSJdLCJzb3VyY2VzQ29udGVudCI6WyIkKCcubGlrZS10b2dnbGUnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgbGV0ICR0aGlzID0gJCh0aGlzKTsgLy/jgqTjg5njg7Pjg4jjgYznmbrngavjgZfjgZ/opoHntKDvvJ1p44K/44Kw44KS5Luj5YWlXG4gICAgJC5hamF4KHtcbiAgICAgICAgaGVhZGVyczogeydYLUNTUkYtVE9LRU4nIDogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKX0sICAvL25hbWXlsZ7mgKfjgYxjc3JmLXRva2Vu44GubWV0YeOCv+OCsOOBrmNvbnRlbnTlsZ7mgKfjga7lgKTjgpLlj5blvpdcbiAgICAgICAgdXJsOiAnL2xpa2UnLCAvL+ODq+ODvOODhuOCo+ODs+OCsOe1jOeUseOBp0xpa2XjgrPjg7Pjg4jjg63jg7zjg6njgavpo5vjgbDjgZlcbiAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICBkYXRhOiB7J2Jsb2dfaWQnOiAkdGhpcy5kYXRhKCdibG9nX2lkJyl9LCAgLy8vL0hUTUzjgYvjgolkYXRhLWJsb2dfaWTjga7lgKTjgpLlj5blvpfjgZfjgabjgrPjg7Pjg4jjg63jg7zjg6njgavpgIHjgotcbiAgICB9KVxuICAgIC5kb25lKGZ1bmN0aW9uIChkYXRhKSB7XG4gICAgICAgICR0aGlzLnRvZ2dsZUNsYXNzKCdmYXMgbGlrZWQnKTsgLy9saWtlZOOCr+ODqeOCueOBrk9OL09GRuWIh+OCiuabv+OBiFxuICAgICAgICAkdGhpcy5uZXh0KCcubGlrZS1jb3VudGVyJykuaHRtbChkYXRhLmJsb2dfbGlrZXNfY291bnQpOyAvL+OCs+ODs+ODiOODreODvOODqeOBi+OCiWJsb2dfbGlrZXNfY291bnTjgajjgYTjgYblkI3liY3jga7jgIzmlrDopo/jgYTjgYTjga3lvozjga7nt4/jgYTjgYTjga3mlbDjgI3jgYzov5TjgaPjgabjgY/jgotcbiAgICB9KVxuICAgIC5mYWlsKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgY29uc29sZS5sb2coJ2ZhaWwnKTtcbiAgICB9KTtcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQ0MsRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFZO0VBQ3RDLElBQUlDLEtBQUssR0FBR0YsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDLENBQUM7RUFDckJBLENBQUMsQ0FBQ0csSUFBSSxDQUFDO0lBQ0hDLE9BQU8sRUFBRTtNQUFDLGNBQWMsRUFBR0osQ0FBQyxDQUFDLHlCQUF5QixDQUFDLENBQUNLLElBQUksQ0FBQyxTQUFTO0lBQUMsQ0FBQztJQUFHO0lBQzNFQyxHQUFHLEVBQUUsT0FBTztJQUFFO0lBQ2RDLElBQUksRUFBRSxNQUFNO0lBQ1pDLElBQUksRUFBRTtNQUFDLFNBQVMsRUFBRU4sS0FBSyxDQUFDTSxJQUFJLENBQUMsU0FBUztJQUFDLENBQUMsQ0FBRztFQUMvQyxDQUFDLENBQUMsQ0FDREMsSUFBSSxDQUFDLFVBQVVELElBQUksRUFBRTtJQUNsQk4sS0FBSyxDQUFDUSxXQUFXLENBQUMsV0FBVyxDQUFDLENBQUMsQ0FBQztJQUNoQ1IsS0FBSyxDQUFDUyxJQUFJLENBQUMsZUFBZSxDQUFDLENBQUNDLElBQUksQ0FBQ0osSUFBSSxDQUFDSyxnQkFBZ0IsQ0FBQyxDQUFDLENBQUM7RUFDN0QsQ0FBQyxDQUFDLENBQ0RDLElBQUksQ0FBQyxZQUFZO0lBQ2RDLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLE1BQU0sQ0FBQztFQUN2QixDQUFDLENBQUM7QUFDTixDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbGlrZS5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/like.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/like.js"]();
/******/ 	
/******/ })()
;