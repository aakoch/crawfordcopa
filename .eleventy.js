module.exports = function(eleventyConfig) {
    // tells 11ty to just copy files from src to dist
    // eleventyConfig.addPassthroughCopy("src/");
    // I thought it told 11ty to not change .html files to <filename>/index.html, but I'm having better luck with setting 
    // the templateFormats below to "md"
    eleventyConfig.setDynamicPermalinks(false);
    
    return {
        // tells 11ty to ignore .html files as template files
        // templateFormats: ["md"],
        dir: {
            // 11ty uses . as the default input
            input: "src",
            // and _site as the default output
            output: "dist"
        }
    }
};