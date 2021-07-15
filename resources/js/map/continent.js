
import * as am4core from "@amcharts/amcharts4/core";
import * as am4maps from "@amcharts/amcharts4/maps";
import am4geodata_worldLow from "@amcharts/amcharts4-geodata/worldLow";
import am4geodata_usaLow from "@amcharts/amcharts4-geodata/usaLow";
import am4themes_animated from "@amcharts/amcharts4/themes/animated";
import am4geodata_continentsLow from "@amcharts/amcharts4-geodata/continentsLow";
import { fill } from "lodash";

const countries_region = JSON.parse(window.mapData);

let valid_countries = countries_region[0].map((country) => ({
    'id': country.country_code,
    'fill': am4core.color("#367B25"),
    'url': `/countries/${country.id}`,
}))



// let valid_countries = [{
//     'id': countries[0].country_code,
//     'fill': am4core.color('black'),
//     'url': 'http://google.com'
// },];

let chart = am4core.create(document.querySelector(".map"), am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// // Series for World map - inactive countrie
// let worldSeries = chart.series.push(new am4maps.MapPolygonSeries());
// worldSeries.include = valid_countries.map(country => country.id);
// // worldSeries.exclude = ["AQ"].concat(valid_countries.map(country => country.id));
// worldSeries.useGeodata = true;



let stripped = countries_region[1][0].name.replace(/\s+/g, '')
let strLow = stripped.charAt(0).toLowerCase() + stripped.slice(1);



// Continents 
let continentsSeries = chart.series.push(new am4maps.MapPolygonSeries());
continentsSeries.geodata = am4geodata_continentsLow;
continentsSeries.useGeodata = true;
continentsSeries.include = [strLow];


// let worldPolygonTemplate = worldSeries.mapPolygons.template;
// worldPolygonTemplate.nonScalingStroke = true;

// worldSeries.mapPolygons.template.stroke = am4core.color('#D9D9D9');

let inactive_countries = [{
    'id': countries_region[0].country_code,
    'fill': am4core.color('black'),
    'url': 'http://facebook.com'
},
{
    'id': 'TZ',
    'fill': am4core.color('black'),
    'url': 'http://google.com'
}];

// active countries
let activeSeries = chart.series.push(new am4maps.MapPolygonSeries());
activeSeries.include = valid_countries.map(country => country.id);
activeSeries.useGeodata = true;

//pre-filling valid countries
activeSeries.data = valid_countries;

let activePolygonTemplate = activeSeries.mapPolygons.template;
activePolygonTemplate.tooltipText = "{name}";
activePolygonTemplate.fill = chart.colors.getIndex(0);
activePolygonTemplate.nonScalingStroke = true;

activePolygonTemplate.propertyFields.fill = 'fill';
activePolygonTemplate.propertyFields.url = 'url';

// Hover state
let hs = activePolygonTemplate.states.create("hover");
hs.properties.fill = am4core.color('green');