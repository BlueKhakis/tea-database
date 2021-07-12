/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/map/map.js ***!
  \*********************************/
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/core'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/maps'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4-geodata/worldLow'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4-geodata/usaLow'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/themes/animated'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());





var countries = JSON.parse(window.mapData);
var valid_countries = countries.map(function (country) {
  return {
    'id': country.country_code,
    'fill': Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/core'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())('black'),
    'url': "/countries/".concat(country.id)
  };
});
console.log(countries); // let valid_countries = [{
//     'id': 'US',
//     'fill': am4core.color('black'),
//     'url': 'http://google.com'
// }, {
//     'id': 'FR',
//     'fill': am4core.color('black'),
//     'url': 'http://google.com'
// }];

var chart = Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/core'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(document.querySelector(".main__home__section.main__home__section__map"), Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/maps'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())); // Set map definition

chart.geodata = Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4-geodata/worldLow'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()); // Set projection

chart.projection = new Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/maps'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(); // Series for World map - inactive countrie

var worldSeries = chart.series.push(new Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/maps'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())());
worldSeries.exclude = ["AQ"].concat(valid_countries.map(function (country) {
  return country.id;
}));
worldSeries.useGeodata = true;
var worldPolygonTemplate = worldSeries.mapPolygons.template;
worldPolygonTemplate.nonScalingStroke = true;
worldSeries.mapPolygons.template.stroke = Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/core'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())('#D9D9D9'); // active countries

var activeSeries = chart.series.push(new Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/maps'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())());
activeSeries.include = valid_countries.map(function (country) {
  return country.id;
});
activeSeries.useGeodata = true; //pre-filling valid countries

activeSeries.data = valid_countries;
var activePolygonTemplate = activeSeries.mapPolygons.template;
activePolygonTemplate.tooltipText = "{name}";
activePolygonTemplate.fill = chart.colors.getIndex(0);
activePolygonTemplate.nonScalingStroke = true;
activePolygonTemplate.propertyFields.fill = 'fill';
activePolygonTemplate.propertyFields.url = 'url'; // Hover state

var hs = activePolygonTemplate.states.create("hover");
hs.properties.fill = Object(function webpackMissingModule() { var e = new Error("Cannot find module '@amcharts/amcharts4/core'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())("#367B25");
/******/ })()
;
//# sourceMappingURL=map.js.map