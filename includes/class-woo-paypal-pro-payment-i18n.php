<?php

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Paypal_Pro_Payment
 * @subpackage Woo_Paypal_Pro_Payment/includes
 * @author     palmoduledev <palmoduledev@gmail.com>
 */
class Woo_Paypal_Pro_Payment_i18n {

    /**
     * @since    1.0.0
     */
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
                'woo-paypal-pro-payment', false, dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }

}
