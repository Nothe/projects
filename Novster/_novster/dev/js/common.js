
require('main.scss');
require('offline-plugin/runtime').install();

// Vendor js
var picturefill = require('picturefill');
var lazyload = require('lazysizes');
var bgset = require('lazysizes/plugins/bgset/ls.bgset');
var parentfit = require('lazysizes/plugins/parent-fit/ls.parent-fit');
var webfont = require('webfont');

// General js
//var initMobileMenu = require('menu-mobile');
var initIndex = require('index');
//var initVisualComposer = require('visual-composer');
//initVisualComposer();

$(document).ready(function(){

	// General js
	//initMobileMenu();
	initIndex();

});