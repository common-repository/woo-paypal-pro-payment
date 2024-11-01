<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Settings for PayPal Pro Gateway.
 */
return $this->form_fields = array(
    'enabled' => array(
        'title' => __('Enable/Disable', 'woo-paypal-pro-payment'),
        'label' => __('Enable PayPal Pro', 'woo-paypal-pro-payment'),
        'type' => 'checkbox',
        'description' => '',
        'default' => 'no'
    ),
    'title' => array(
        'title' => __('Title', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('This controls the title which the user sees during checkout.', 'woo-paypal-pro-payment'),
        'default' => __('Credit card (PayPal)', 'woo-paypal-pro-payment'),
        'desc_tip' => true
    ),
    'description' => array(
        'title' => __('Description', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('This controls the description which the user sees during checkout.', 'woo-paypal-pro-payment'),
        'default' => __('Pay with your credit card via PayPal Website Payments Pro.', 'woo-paypal-pro-payment'),
        'desc_tip' => true
    ),
    'testmode' => array(
        'title' => __('Test Mode', 'woo-paypal-pro-payment'),
        'label' => __('Enable PayPal Sandbox/Test Mode', 'woo-paypal-pro-payment'),
        'type' => 'checkbox',
        'description' => __('Place the payment gateway in development mode.', 'woo-paypal-pro-payment'),
        'default' => 'no',
        'desc_tip' => true
    ),
    'sandbox_api_username' => array(
        'title' => __('Sandbox API Username', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Get your API credentials from PayPal.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true
    ),
    'sandbox_api_password' => array(
        'title' => __('Sandbox API Password', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Get your API credentials from PayPal.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true
    ),
    'sandbox_api_signature' => array(
        'title' => __('Sandbox API Signature', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Get your API credentials from PayPal.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true
    ),
    'api_username' => array(
        'title' => __('API Username', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Get your API credentials from PayPal.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true
    ),
    'api_password' => array(
        'title' => __('API Password', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Get your API credentials from PayPal.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true
    ),
    'api_signature' => array(
        'title' => __('API Signature', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Get your API credentials from PayPal.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true
    ),
    'paymentaction' => array(
        'title' => __('Payment Action', 'woo-paypal-pro-payment'),
        'type' => 'select',
        'description' => __('Choose whether you wish to capture funds immediately or authorize payment only.', 'woo-paypal-pro-payment'),
        'default' => 'sale',
        'desc_tip' => true,
        'options' => array(
            'sale' => __('Capture', 'woo-paypal-pro-payment'),
            'authorization' => __('Authorize', 'woo-paypal-pro-payment')
        )
    ),
    'send_items' => array(
        'title' => __('Send Item Details', 'woo-paypal-pro-payment'),
        'label' => __('Send Line Items to PayPal', 'woo-paypal-pro-payment'),
        'type' => 'checkbox',
        'description' => __('Sends line items to PayPal. If you experience rounding errors this can be disabled.', 'woo-paypal-pro-payment'),
        'default' => 'no',
        'desc_tip' => true
    ),
    'invoice_prefix' => array(
        'title' => __('Invoice Prefix', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('Please enter a prefix for your invoice numbers. If you use your PayPal account for multiple stores ensure this prefix is unique as PayPal will not allow orders with the same invoice number.', 'woo-paypal-pro-payment'),
        'default' => 'WC-PayPal_Pro',
        'desc_tip' => true,
    ),
    'soft_descriptor' => array(
        'title' => __('Soft Descriptor', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'description' => __('(Optional) Information that is usually displayed in the account holder\'s statement, for example your website name. Only 23 alphanumeric characters can be included, including the special characters dash (-) and dot (.) . Asterisks (*) and spaces ( ) are NOT permitted.', 'woo-paypal-pro-payment'),
        'default' => '',
        'desc_tip' => true,
        'custom_attributes' => array(
            'maxlength' => 23,
            'pattern' => '[a-zA-Z0-9.-]+'
        )
    ),
    'card_icon' => array(
        'title' => __('Card Icon', 'woo-paypal-pro-payment'),
        'type' => 'text',
        'default' => WOO_PAYPAL_PRO_PAYMENT_ASSET_URL . '/assets/images/cards.png',
        'class' => 'button_upload'
    ),
    'debug' => array(
        'title' => __('Debug Log', 'woo-paypal-pro-payment'),
        'type' => 'checkbox',
        'label' => __('Enable logging', 'woo-paypal-pro-payment'),
        'default' => 'no',
        'desc_tip' => true,
        'description' => __('Log PayPal Pro events inside <code>woocommerce/logs/paypal-pro.txt</code>', 'woo-paypal-pro-payment'),
    )
);
