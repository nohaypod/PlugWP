<?php
/*
* Plugin Name:        PluginWPbase
 * Plugin URI:        https://accesos.site
 * Description:       Plugin base si bien locoshon
 * Version:           0.0.1
 * Requires PHP:      7.2
 * Author:            @nohaypod @goatgear
 * Author URI:        https://accesos.site/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ?
 * Domain Path:       Espanglish
 */
register_activation_hook(__FILE__,'Activarplug');
function Activarplug(){
    //silenceisgolden
}

register_deactivation_hook(__FILE__,'Desactivarplug');
function Desactivarplug(){
    flush_rewrite_rules();
}
add_action('admin_menu', 'CrearMenuplug');

function CrearMenuplug(){
    add_menu_page(
        'Dashboard', // Título página
        'Menú', // Título menu
        'manage_options', // Capability
        plugin_dir_path(__FILE__).'pluginhome.php', // slug
        null, // Funcion de contenido
        null,
        '6'
    );
};
 ?>
