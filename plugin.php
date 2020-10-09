<?php

/**
 * @package bootstrap_inside_wordpress_plugin
 * @version 4.5.2
 **/

/*
Plugin Name: Bootstrap Inside
Plugin URI: https://sdardour.com/lab/2020/bootstrap-inside-wordpress-plugin/
Description: Add components from Bootstrap (4.5.2) to WordPress posts and pages. Create an HTML DIV — &lt;div class="bootstrap-inside"&gt;&lt;/div&gt; — and then insert, inside, Bootstrap components.
Author: lab@sdardour.com
Version: 1.0
Author URI: https://sdardour.com/lab
 */

/* --- */

if (!function_exists("add_action")) {
    exit;
}

/* --- */

define("SDARDOURCOM_BOOTSTRAP_INSIDE_URL", plugin_dir_url(__FILE__));

/* --- */

function SDARDOURCOM_BOOTSTRAP_INSIDE_WP_ENQUEUE_SCRIPTS()
{
    wp_enqueue_script("jquery");
    wp_enqueue_script(
        "bootstrap-bundle",
        SDARDOURCOM_BOOTSTRAP_INSIDE_URL . "assets/bootstrap@4.5.2/js/bootstrap.bundle.min.js",
        array("jquery")
    );
    wp_enqueue_style(
        "bootstrap-inside",
        SDARDOURCOM_BOOTSTRAP_INSIDE_URL . "assets/bootstrap@4.5.2/css/bootstrap-inside.css"
    );
}

add_action("wp_enqueue_scripts", "SDARDOURCOM_BOOTSTRAP_INSIDE_WP_ENQUEUE_SCRIPTS");

/* --- */
