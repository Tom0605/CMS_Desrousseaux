<?php
/*
Plugin Name: insset
Plugin URI: localhost:8080/wordpress
Description: Ceci est le plugin insset
Author:VESLEAU Tom du Traintrain
Version: 1.0
Author URI: localhost:8080/wordpress
*/
define('INSSET_FILE', __FILE__);
define('INSSET_DIR', dirname(INSSET_FILE));
define('INSSET_BASENAME', pathinfo((INSSET_FILE))['filename']);
define('INSSET_PLUGIN_NAME', INSSET_BASENAME); // cste utilisée dans function assets de Insset_Admin.php

register_activation_hook(__FILE__, function () { // HOOK : point d'entrée dans code pour exectuer action à un moment précis
    new Insset_Install(); // en commentaire sinon ça insert 2 fois mêmes données date_ouverture et date_fermetture dans BDD 
});

foreach (glob(INSSET_DIR . '/classes/*/*.php') as $filename)
    if (!preg_match('/export|cron/i', $filename))
        if (!@require_once $filename)
            throw new Exception(sprintf(__('Failed to include %s'), $filename)); // %s pour string

if (is_admin()) // si on est sur backoffice et connecté
    new Insset_Admin();
