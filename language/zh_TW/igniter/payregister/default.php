<?php

return [
    'text_this_payment' => '付款方式',
    'text_save_card_profile' => 'Save card details for later.',
    'text_refund_title' => 'Refund: %s',
    'text_refund_full' => 'Full Refund',
    'text_refund_partial' => 'Partial Refund',

    'label_order_fee_type' => 'Additional Fee Type',
    'label_order_fee' => 'Additional Fee',
    'label_order_total' => 'Minimum Total',
    'label_order_status' => 'Order Status',
    'label_refund_type' => 'Refund Type',
    'label_refund_amount' => 'Refund Partial Amount',

    'button_delete_card' => 'Delete and use a different card.',
    'button_refund' => 'Refund',

    'alert_min_total' => 'Order total is below the minimum order total for %s.',
    'alert_min_order_total' => 'You need to spend %s or more to pay with %s.',
    'alert_order_fee' => 'There\'s an additional fee of %s when you pay with %s.',
    'alert_missing_applicable_fee' => '缺少而外費用 %s',

    'help_order_total' => '此付款條件生效之前, 訂單必須到達的簽出總數',
    'help_order_fee' => '該付款網關啟用後，將向訂單總額收取額外費用',
    'help_order_status' => '使用此付款方式的訂單狀態',

    'cod' => [
        'text_tab_general' => 'General',
        'text_payment_title' => '貨到付款',
        'text_payment_desc' => 'Accept cash on delivery during checkout',

        'label_title' => 'Title',
        'label_status' => 'Status',
        'label_priority' => 'Priority',
    ],

    'paypal' => [
        'text_tab_general' => 'General',
        'text_payment_title' => 'PayPal Express',
        'text_payment_desc' => '允許您的客戶使用PayPal支付',

        'text_sandbox' => 'Sandbox',
        'text_go_live' => 'Go Live',
        'text_sale' => 'SALE',
        'text_authorization' => 'AUTHORIZATION',

        'label_title' => 'Title',
        'label_api_user' => 'API Username',
        'label_api_pass' => 'API Password',
        'label_api_signature' => 'API Signature',
        'label_api_mode' => 'Mode',
        'label_api_action' => '付款操作',
        'label_priority' => 'Priority',
        'label_status' => 'Status',

        'alert_error_server' => '<p class="alert-danger">Sorry an error occurred, please try again</p>',
    ],

    'authorize_net_aim' => [
        'text_payment_title' => 'Authorize.Net (AIM)',
        'text_payment_desc' => '接受信用卡付款',
        'text_go_live' => 'Go Live',
        'text_test' => 'Test',
        'text_test_live' => 'Test Live',
        'text_sale' => 'SALE',
        'text_auth_only' => 'Authorization Only',
        'text_auth_capture' => 'Authorization & Capture',
        'text_visa' => 'Visa',
        'text_mastercard' => 'MasterCard',
        'text_american_express' => 'American Express',
        'text_jcb' => 'JCB',
        'text_diners_club' => 'Diners Club',

        'label_title' => 'Title',
        'label_api_login_id' => 'API Login ID',
        'label_client_key' => 'Client Key',
        'label_transaction_key' => 'Transaction Key',
        'label_transaction_mode' => 'Transaction Mode',
        'label_transaction_type' => 'Transaction Type',
        'label_accepted_cards' => 'Accepted Cards',
        'label_priority' => 'Priority',
        'label_status' => 'Status',

        'alert_acceptable_cards' => 'We only accept %s',
    ],

    'stripe' => [
        'text_tab_general' => 'General',
        'text_payment_title' => 'Square 支付',
        'text_payment_desc' => '接受信用卡付款',
        'text_credit_or_debit' => 'Credit or debit card',

        'text_auth_only' => 'Authorization Only',
        'text_auth_capture' => 'Authorization & Capture',
        'text_description' => 'Pay by Credit Card using Stripe',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_stripe_charge_description' => '%s Charge for %s',
        'text_payment_status' => '付款 %s (%s)',

        'label_title' => 'Title',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Transaction Mode',
        'label_transaction_type' => 'Transaction Type',
        'label_test_secret_key' => 'Test Secret Key',
        'label_test_publishable_key' => 'Test Publishable Key',
        'label_live_secret_key' => 'Live Secret Key',
        'label_live_publishable_key' => 'Live Publishable Key',
        'label_priority' => 'Priority',
        'label_status' => 'Status',
    ],

    'mollie' => [
        'text_payment_title' => '行動支付',
        'text_payment_desc' => '接受信用卡付款',

        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_description' => 'Pay by Credit Card using Mollie',
        'text_payment_status' => '付款 %s (%s)',

        'label_transaction_mode' => 'Transaction Mode',
        'label_test_api_key' => 'Test API Key',
        'label_live_api_key' => 'Live API Key',
    ],

    'square' => [
        'text_payment_title' => 'Square 支付',
        'text_payment_desc' => '接受信用卡付款',

        'text_description' => 'Pay by Credit Card using Square',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_payment_status' => '付款 %s (%s)',

        'label_title' => 'Title',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Transaction Mode',
        'label_test_app_id' => 'Test Application ID',
        'label_test_access_token' => 'Test Access Token',
        'label_test_location_id' => 'Test Location ID',
        'label_live_app_id' => 'Live Application ID',
        'label_live_access_token' => 'Live Access Token',
        'label_live_location_id' => 'Live Location ID',

        'help_square' => 'Get Square API Keys from <a href="https://developer.squareup.com">here</a>',
    ],
];
