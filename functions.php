<?php

/* ------------------------------------------------------------------------- *
 *  The main functions.php file for WordPress Themes.
 *
 *  This file only contains the call to the files that are necessary for the 
 *  theme to function properly.
 *
 *  Use another file to use your own custom functions or edit the 
 *  custom-functions.php file, which can found in the 'library' folder.
 *
 *  You can also create a new file in the 'library' folder and include that 
 *  file here.
 *
 *  You can add new files here using the 'require_once()' syntax.  
/* ------------------------------------------------------------------------- */

/*
1. library/cleanup.php
  - head cleanup
	- post and images related cleaning
*/
require_once('library/cleanup.php'); // do all the cleaning and enqueue here

/*
2. library/enqueue-style.php
    - enqueue Foundation and foundationbuddy CSS
*/
require_once('library/enqueue-style.php');

/*
3. library/foundation.php
	- add pagination
*/
require_once('library/foundation.php'); // load Foundation specific functions like top-bar

/*
4. library/navigation.php
	- custom walker for top-bar and related
*/
require_once('library/navigation.php'); // filter default wordpress menu classes and clean wp_nav_menu markup

/*
5. library/custom-fonts.php
    - add different fonts through Google Fonts
*/
require_once('library/custom-fonts.php');

/*
6. library/random-post-widget.php
    - add random posts to sidebar
*/
require_once('library/random-post-widget.php');

/*
7. library/custom-functions.php
    - add customs functions to the theme
*/
require_once('library/custom-functions.php');

/*
8. library/entry-meta.php
    - add entry metas to the theme contents
*/
require_once('library/entry-meta.php');

/*
9. library/random-post-widget.php
    - add random posts to sidebar
*/
require_once('library/widget-areas.php');

/*
10. library/enqueue-scripts.php
    - enqueues the js to the theme
*/
require_once('library/enqueue-scripts.php');

/*
11. library/theme-customizer.php
    - add Customizer options for theme
*/
require_once('library/theme-customizer.php');

/*
12. library/theme-support.php
    - add theme support
*/
require_once('library/theme-support.php');

/*
13. library/custom-header.php
    - add custom header
*/
require_once('library/custom-header.php');

?>