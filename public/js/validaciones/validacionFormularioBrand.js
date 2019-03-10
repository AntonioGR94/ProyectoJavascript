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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/validaciones/validacionFormularioBrand.js":
/*!****************************************************************!*\
  !*** ./resources/js/validaciones/validacionFormularioBrand.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//Este evento se lanza cuando se carga todo el DOM en la página
document.addEventListener("DOMContentLoaded", function (event) {
  var formulario = document.getElementById("brandForm");
  var inputNombre = document.getElementById("name");
  var inputUrl = document.getElementById("url");
  var inputCreateDate = document.getElementById("createDate");
  inputNombre.addEventListener("keydown", function (event) {
    comprobarCampo(event, comprobarNombre);
  });
  inputUrl.addEventListener("keydown", function (event) {
    comprobarCampo(event, comprobarUrl);
  });
  inputCreateDate.addEventListener("keydown", function (event) {
    comprobarCampo(event, comprobarCreateDate);
  });
});

function marcarInputCorrecto(input) {
  input.classList.remove("invalido");
  input.classList.add("valido");
}

function marcarInputErroneo(input) {
  input.classList.remove("valido");
  input.classList.add("invalido");
}

var timeout = null;

function comprobarCampo(event, funcionComprobar) {
  clearTimeout(timeout);
  timeout = setTimeout(function () {
    funcionComprobar(event.target);
  }, 500);
}

;

function comprobarNombre(inputNombre) {
  var correcto = false;
  var expresion = /^[a-zA-Z]+$/g;

  if (expresion.test(inputNombre.value)) {
    marcarInputCorrecto(inputNombre);
    correcto = true;
  } else {
    marcarInputErroneo(inputNombre);
  }

  return correcto;
}

function comprobarUrl(inputUrl) {
  var correcto = false;
  var expresion = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;

  if (expresion.test(inputUrl.value)) {
    marcarInputCorrecto(inputUrl);
    correcto = true;
  } else {
    marcarInputErroneo(inputUrl);
  }

  return correcto;
}

function comprobarCreateDate(inputCreateDate) {
  var correcto = false;
  var expresion = /^[0-9]{4}/;

  if (expresion.test(inputCreateDate.value)) {
    marcarInputCorrecto(inputCreateDate);
    correcto = true;
  } else {
    marcarInputErroneo(inputCreateDate);
  }

  return correcto;
}

function comprobarFormulario(event) {
  event.preventDefault();
  var esNombreCorrecto = comprobarNombre(document.getElementById("nombre"));
  var esUrlCorrecta = comprobarUrl(document.getElementById("url"));
  var esFechaCorrecta = comprobarCreateDate(document.getElementById("createDate"));

  if (esNombreCorrecto && esUrlCorrecta && esFechaCorrecta) {
    var formulario = document.getElementById("brandForm");
    formulario.submit();
  } else {
    console.log("ERROR EN EL FORMULARIO");
  }
}

/***/ }),

/***/ 1:
/*!**********************************************************************!*\
  !*** multi ./resources/js/validaciones/validacionFormularioBrand.js ***!
  \**********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/antonio/Sites/ProyectoJavascript/resources/js/validaciones/validacionFormularioBrand.js */"./resources/js/validaciones/validacionFormularioBrand.js");


/***/ })

/******/ });