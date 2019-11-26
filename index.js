var ssi = require("ssi");

var inputDirectory = "public";
var outputDirectory = "output";
var matcher = "**/*.shtml";

var includes = new ssi(inputDirectory, outputDirectory, matcher);
includes.compile();
