# DataCrunch Code Assessment theme

This is a custom WordPress theme for a Data Crunch code assessment.

## Theme structure

Other than basic WordPress templates, the theme has extra additional files and folders.
*Assets* folder contains both source and compiled Assets (JS, CSS and fonts).
*Inc* folder contains all the files that create extra functionality. At this point, the contents of the folder are divided between Custom Post Types and Custom Taxonomies.
*Template parts* folder contains all the extra template files.
*Webpack.config.js* file contains webpack configuration for compiling styles and module bundling.

## Theme Features

- Custom post type "Portfolio" is created. Posts within this post type can have titles, thumbnails, excerpts and assigned skills.

- Custom taxonomy "Skills" is created. Posts within the Portfolio post type can have skills assigned for them.

## Usage

### Development

1. Add the theme folder to *wp-content/themes/* folder of your WordPress Project.
2. Run *npm install* to install all dependencies.
3. Run *npm run dev* to launch the watcher and autocompiler. This will auto update your asset files.
4. Run *npm run build* before deploying to compile minimized version of CSS and JS.

### Installation

Install theme using the default WordPress Installer.

### Creating Custom post types and Taxonomies

Create Portfolio posts using the default WordPress tools. Skills section is located under the Portfolio in the main WordPress Dashboard Menu. Theme colors has been set to work with WordPress Pallete. 

## Links

[Github Repo](https://github.com/oleksiitsioma/datacrunch-theme.git)