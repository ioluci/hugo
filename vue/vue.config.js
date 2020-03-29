module.exports = {
    // options...
    //https://cli.vuejs.org/config/#vue-config-js
    publicPath: "/hugo/", // If your app is deployed at a sub-path, you will need to specify that sub-path using this option.
    outputDir: "dist", //The directory where the production build files will be generated in when running vue-cli-service build.
    assetsDir: "", //A directory (relative to outputDir) to nest generated static assets (js, css, img, fonts) under.
    filenameHashing: false, //you can disable filename hashing by setting this option to false.
    configureWebpack: {
        //If the value is an Object, it will be merged into the final config using webpack-merge
        devtool: "source-map",
        output: {
            filename: "js/vue_app.js",
            chunkFilename: "js/vue_vendors.js"
        }
    }
};
