<?php

/**
 * @link              https://profiles.wordpress.org/palmoduledev/
 * @since             1.0.0
 * @package           Woo_Paypal_Pro_Payment
 *
 * @wordpress-plugin
 * Plugin Name:       PayPal Pro WooCommerce
 * Plugin URI:        https://profiles.wordpress.org/palmoduledev
 * Description:       PayPal Pro WooCommerce. Develop by Official PayPal Partner.
 * Version:           1.0.1
 * Author:            palmoduledev
 * Author URI:        https://profiles.wordpress.org/palmoduledev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-paypal-pro-payment
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('WOO_PAYPAL_PRO_PAYMENT_VERSION', '1.0.1');
if (!defined('WOO_PAYPAL_PRO_PAYMENT_PLUGIN_DIR')) {
    define('WOO_PAYPAL_PRO_PAYMENT_PLUGIN_DIR', untrailingslashit(dirname(__FILE__)));
}
if (!defined('WOO_PAYPAL_PRO_PAYMENT_ASSET_URL')) {
    define('WOO_PAYPAL_PRO_PAYMENT_ASSET_URL', untrailingslashit(plugin_dir_url(__FILE__)));
}
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-paypal-pro-payment-activator.php
 */
function activate_woo_paypal_pro_payment() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-woo-paypal-pro-payment-activator.php';
    Woo_Paypal_Pro_Payment_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-paypal-pro-payment-deactivator.php
 */
function deactivate_woo_paypal_pro_payment() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-woo-paypal-pro-payment-deactivator.php';
    Woo_Paypal_Pro_Payment_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_woo_paypal_pro_payment');
register_deactivation_hook(__FILE__, 'deactivate_woo_paypal_pro_payment');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-woo-paypal-pro-payment.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_paypal_pro_payment() {

    $plugin = new Woo_Paypal_Pro_Payment();
    $plugin->run();
}

run_woo_paypal_pro_payment();
