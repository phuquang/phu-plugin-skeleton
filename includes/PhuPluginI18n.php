<?php

/**
 * PhuPlugin
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    PhuPlugin
 * @subpackage PhuPlugin/includes
 * @author     Phu <phuquanglxc@gmail.com>
 */
class PhuPluginI18n
{

    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(PHU_PLUGIN_NAME, false, dirname(dirname(plugin_basename(__FILE__))) . '/languages/');

    }

}
