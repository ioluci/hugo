
module.exports = {
    // options...
    //https://cli.vuejs.org/config/#vue-config-js
    // If your app is deployed at a sub-path, you will need to specify that sub-path using this option.
    publicPath: "/hugo/",

    //The directory where the production build files will be generated in when running vue-cli-service build.
    outputDir: "dist",

    //A directory (relative to outputDir) to nest generated static assets (js, css, img, fonts) under.
    assetsDir: "",

    //you can disable filename hashing by setting this option to false.
    filenameHashing: false,

    configureWebpack: {
        //If the value is an Object, it will be merged into the final config using webpack-merge
        devtool: "source-map",
        output: {
            filename: "js/vue_app.js",
            chunkFilename: "js/vue_vendors.js"
        }
    },

    chainWebpack: config => {
        if (config.plugins.has("extract-css")) {
            const extractCSSPlugin = config.plugin("extract-css");
            extractCSSPlugin &&
                extractCSSPlugin.tap(() => [
                    {
                        filename: "css/vue_styles.css",
                        chunkFilename: "css/vendors_styles.css"
                    }
                ]);
        }
    },

    pluginOptions: {
        quasar: {
            importStrategy: "kebab",
            rtlSupport: false
        }
    },

    transpileDependencies: ["quasar"]
};
