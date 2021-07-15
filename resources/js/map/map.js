
import * as am4core from "@amcharts/amcharts4/core";
import * as am4maps from "@amcharts/amcharts4/maps";
import am4geodata_worldLow from "@amcharts/amcharts4-geodata/worldLow";
import am4geodata_usaLow from "@amcharts/amcharts4-geodata/usaLow";
import am4themes_animated from "@amcharts/amcharts4/themes/animated";

let countries = JSON.parse(window.mapData);

let valid_countries = countries.map((country) => ({
    'id': country.country_code,
    'fill': am4core.color('rgba(54, 143, 139, 1)'),
    'url': `/countries/${country.id}`,
}))

// let valid_countries = [{
//     'id': 'US',
//     'fill': am4core.color('black'),
//     'url': 'http://google.com'
// }, {
//     'id': 'FR',
//     'fill': am4core.color('black'),
//     'url': 'http://google.com'
// }];

let chart = am4core.create(document.querySelector(".main__home__section.main__home__section__map"), am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Series for World map - inactive countrie
let worldSeries = chart.series.push(new am4maps.MapPolygonSeries());
worldSeries.exclude = ["AQ"].concat(valid_countries.map(country => country.id));
worldSeries.useGeodata = true;


let worldPolygonTemplate = worldSeries.mapPolygons.template;
worldPolygonTemplate.nonScalingStroke = true;

worldSeries.mapPolygons.template.stroke = am4core.color('#D9D9D9');

// active countries
let activeSeries = chart.series.push(new am4maps.MapPolygonSeries());
activeSeries.include = valid_countries.map(country => country.id);
activeSeries.useGeodata = true;

//pre-filling valid countries
activeSeries.data = valid_countries;

let activePolygonTemplate = activeSeries.mapPolygons.template;
activePolygonTemplate.tooltipText = "{name}";
activePolygonTemplate.fill = am4core.color('#ff0000');
activePolygonTemplate.nonScalingStroke = true;

activePolygonTemplate.propertyFields.fill = 'fill';
activePolygonTemplate.propertyFields.url = 'url';

// Hover state
let hs = activePolygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("rgba(36, 106, 115, 1)");