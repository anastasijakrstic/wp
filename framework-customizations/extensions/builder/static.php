<?php if (!defined('FW')) die('Forbidden');
/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 12/14/16
 * Time: 4:29 PM


// Prevent loading of fw thing something grid :-)
if (!is_admin()) {
    wp_register_style(
        'fw-ext-builder-frontend-grid',
        get_template_directory_uri() .'/framework-customizations/extensions/builder/static/frontend-grid.css',
        array(),
        fw()->theme->manifest->get_version()
    );
}
 */