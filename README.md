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

