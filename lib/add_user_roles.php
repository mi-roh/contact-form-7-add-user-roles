<?php
/**
 * User: micha
 * Date: 23.05.16
 * Time: 16:43
 * SDG
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


class MiRoh_CF7_Add_User_Roles {
    static public function add_capability() {
        // gets the author role
        $role = get_role( 'administrator' );
        if ($role) {
            // This only works, because it accesses the class instance.
            $role->add_cap(WPCF7_ADMIN_READ_CAPABILITY);
            $role->add_cap(WPCF7_ADMIN_READ_WRITE_CAPABILITY);
        }
    }


    /**
     * @author: https://wordpress.org/support/profile/jsdalton
     * @url: https://wordpress.org/support/topic/how-to-change-plugins-load-order
     */
    static public function init_order() {
        // ensure path to this file is via main wp plugin path
        $wp_path_to_this_file = preg_replace('/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR."/$2", __FILE__);
        $this_plugin = plugin_basename(trim($wp_path_to_this_file));
        $active_plugins = get_option('active_plugins');
        $this_plugin_key = array_search($this_plugin, $active_plugins);
        if ($this_plugin_key) { // if it's 0 it's the first plugin already, no need to continue
            array_splice($active_plugins, $this_plugin_key, 1);
            array_unshift($active_plugins, $this_plugin);
            update_option('active_plugins', $active_plugins);
        }
    }
}


