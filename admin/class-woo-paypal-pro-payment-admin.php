<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Paypal_Pro_Payment
 * @subpackage Woo_Paypal_Pro_Payment/admin
 * @author     palmoduledev <palmoduledev@gmail.com>
 */
class Woo_Paypal_Pro_Payment_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/woo-paypal-pro-payment-admin.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/woo-paypal-pro-payment-admin.js', array('jquery'), $this->version, false);
    }
    
    public function init_woo_paypal_pro_payment() {
        if (class_exists('WC_Payment_Gateway')) {
            require_once( WOO_PAYPAL_PRO_PAYMENT_PLUGIN_DIR . '/includes/paypal-pro/class-wc-gateway-palmodule-paypal-pro.php' );
        }
    }

    public function woo_paypal_pro_payment_add_payment_method_class($methods) {
        if (class_exists('WC_Payment_Gateway')) {
            $methods[] = 'WC_Gateway_Palmodule_PayPal_Pro';
        }
        return $methods;
    }

}
