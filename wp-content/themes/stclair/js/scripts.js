/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./sass/main.scss */ \"./src/sass/main.scss\");\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _components_header_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/header.js */ \"./src/components/header.js\");\n/* harmony import */ var _components_header_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_header_js__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _components_accordion_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/accordion.js */ \"./src/components/accordion.js\");\n/* harmony import */ var _components_accordion_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_accordion_js__WEBPACK_IMPORTED_MODULE_3__);\n\n\n\n\n\n// Listen to tab events to enable outlines (accessibility improvement)\nfunction handleFirstTab(e) {\n    if (e.keyCode === 9) {\n        // the \"I am a keyboard user\" key\n        document.body.classList.add('user-is-tabbing');\n        window.removeEventListener('keydown', handleFirstTab);\n    }\n}\n\nwindow.addEventListener('keydown', handleFirstTab);\n\n//# sourceURL=webpack:///./src/app.js?");

/***/ }),

/***/ "./src/components/accordion.js":
/*!*************************************!*\
  !*** ./src/components/accordion.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function ($, root, undefined) {\n\n  $(function () {\n\n    'use strict';\n\n    var acc = document.getElementsByClassName(\"accordion-js\");\n    var i;\n\n    for (i = 0; i < acc.length; i++) {\n      acc[i].addEventListener(\"click\", function () {\n\n        this.classList.toggle(\"active\");\n        var panel = this.nextElementSibling;\n\n        if (panel.style.maxHeight) {\n          // close\n          panel.style.maxHeight = null;\n          panel.style[\"overflow\"] = \"hidden\";\n        } else {\n          // open\n          panel.style.maxHeight = panel.scrollHeight + \"px\";\n\n          // prevent overflow from being hidden once open\n          setTimeout(function () {\n            panel.style[\"overflow\"] = \"visible\";\n          }, 250);\n        }\n      });\n    }\n  });\n})(jQuery, this);\n\n//# sourceURL=webpack:///./src/components/accordion.js?");

/***/ }),

/***/ "./src/components/header.js":
/*!**********************************!*\
  !*** ./src/components/header.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function ($, root, undefined) {\n\n    $(function () {\n\n        'use strict';\n    });\n\n    $(document).ready(function () {\n        $(\".nav__hamburger-icon\").click(function () {\n            $(\".nav__hamburger-icon\").toggleClass(\"nav__open\");\n        });\n\n        // Modal Pop Up when Reserve Now button clicked\n\n        var btn = document.getElementsByClassName(\"click-to-open\");\n\n        for (var i = 0; i < btn.length; i++) {\n            var thisBtn = btn[i];\n            thisBtn.addEventListener(\"click\", function () {\n\n                // Open\n                var modal = document.getElementById(this.dataset.modal);\n                modal.style.display = \"block\";\n\n                // Close \n                // Get the <span> element that closes the modal\n                var spanOne = document.getElementsByClassName(\"close-one\")[0];\n                var spanTwo = document.getElementsByClassName(\"close-two\")[0];\n                var spanThree = document.getElementsByClassName(\"close-three\")[0];\n\n                // When the user clicks on <span> (x), close the modal\n                spanOne.onclick = function () {\n                    modal.style.display = \"none\";\n                };\n                spanTwo.onclick = function () {\n                    modal.style.display = \"none\";\n                };\n                spanThree.onclick = function () {\n                    modal.style.display = \"none\";\n                };\n\n                // When the user clicks anywhere outside of the modal, close it\n                window.onclick = function (event) {\n                    if (event.target == modal) {\n                        modal.style.display = \"none\";\n                    }\n                };\n            }, false);\n        };\n    });\n})(jQuery, this);\n\n//# sourceURL=webpack:///./src/components/header.js?");

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed: ModuleBuildError: Module build failed: Error: `sass-loader` requires `node-sass` >=4. Please install a compatible version.\\n    at Object.sassLoader (/Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/sass-loader/lib/loader.js:31:19)\\n    at /Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/webpack/lib/NormalModule.js:259:20\\n    at /Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/loader-runner/lib/LoaderRunner.js:364:11\\n    at /Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/loader-runner/lib/LoaderRunner.js:230:18\\n    at runSyncOrAsync (/Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/loader-runner/lib/LoaderRunner.js:143:3)\\n    at iterateNormalLoaders (/Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/loader-runner/lib/LoaderRunner.js:229:2)\\n    at Array.<anonymous> (/Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/loader-runner/lib/LoaderRunner.js:202:4)\\n    at Storage.finished (/Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/enhanced-resolve/lib/CachedInputFileSystem.js:43:16)\\n    at /Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/enhanced-resolve/lib/CachedInputFileSystem.js:79:9\\n    at /Users/abp-three/Desktop/Projects/stclair/wp-content/themes/stclair/node_modules/graceful-fs/graceful-fs.js:78:16\\n    at FSReqCallback.readFileAfterClose [as oncomplete] (internal/fs/read_file_context.js:63:3)\");\n\n//# sourceURL=webpack:///./src/sass/main.scss?");

/***/ }),

/***/ 0:
/*!***********************************************!*\
  !*** multi ./src/app.js ./src/sass/main.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./src/app.js */\"./src/app.js\");\nmodule.exports = __webpack_require__(/*! ./src/sass/main.scss */\"./src/sass/main.scss\");\n\n\n//# sourceURL=webpack:///multi_./src/app.js_./src/sass/main.scss?");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("module.exports = jQuery;\n\n//# sourceURL=webpack:///external_%22jQuery%22?");

/***/ })

/******/ });