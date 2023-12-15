<?php

return [
    'text_this_payment' => 'ce mode de paiement',
    'text_save_card_profile' => 'Enregistrer les détails de la carte pour plus tard.',
    'text_refund_title' => 'Remboursement : %s',
    'text_refund_full' => 'Remboursement total',
    'text_refund_partial' => 'Remboursement partiel',

    'label_order_fee_type' => 'Type de frais supplémentaires',
    'label_order_fee' => 'Frais supplémentaire',
    'label_order_total' => 'Total minimum',
    'label_order_status' => 'État de la commande',
    'label_refund_type' => 'Type de remboursement',
    'label_refund_amount' => 'Montant partiel du remboursement',

    'button_delete_card' => 'Supprimer et utiliser une autre carte.',
    'button_refund' => 'Rembourser',

    'alert_min_total' => 'Le total de la commande est inférieur au minimum de commande pour %s.',
    'alert_min_order_total' => 'Vous devez dépenser %s ou plus pour payer avec %s.',
    'alert_order_fee' => 'Il y a des frais supplémentaires de %s lorsque vous payez avec %s.',
    'alert_missing_applicable_fee' => 'Frais supplémentaires manquants pour le paiement de %s.',

    'help_order_total' => 'Le montant minimum de la commande doit être atteint avant que cette passerelle de paiement devienne active',
    'help_order_fee' => 'Frais supplémentaires sur le total de la commande lorsque cette passerelle de paiement devient active',
    'help_order_status' => 'Statut de commande par défaut lorsque ce mode de paiement est utilisé.',

    'cod' => [
        'text_tab_general' => 'Général',
        'text_payment_title' => 'Paiement à la livraison',
        'text_payment_desc' => 'Choisir paiement à la livraison lors de la commande',

        'label_title' => 'Titre',
        'label_status' => 'Statut',
        'label_priority' => 'Priorité',
    ],

    'paypal' => [
        'text_tab_general' => 'Général',
        'text_payment_title' => 'PayPal Express',
        'text_payment_desc' => 'Permet à vos clients d\'effectuer des paiements via PayPal',

        'text_sandbox' => 'Bac à sable',
        'text_go_live' => 'Passer en Direct',
        'text_sale' => 'VENTES',
        'text_authorization' => 'AUTORISATION',

        'label_title' => 'Titre',
        'label_api_user' => 'Nom d\'utilisateur API',
        'label_api_pass' => 'Mot de passe API',
        'label_api_signature' => 'Signature API',
        'label_api_mode' => 'Mode',
        'label_api_action' => 'Mode de paiement',
        'label_priority' => 'Priorité',
        'label_status' => 'Statut',

        'alert_error_server' => '<p class="alert-danger">Désolé, une erreur s\'est produite, veuillez réessayer</p>',
    ],

    'authorize_net_aim' => [
        'text_payment_title' => 'Authorize.Net (AIM)',
        'text_payment_desc' => 'Accepter les paiements par carte de crédit via Authorize.Net',
        'text_go_live' => 'Passer en Direct',
        'text_test' => 'Tester',
        'text_test_live' => 'Test en direct',
        'text_sale' => 'VENTES',
        'text_auth_only' => 'Autorisation uniquement',
        'text_auth_capture' => 'Autorisation et capture',
        'text_visa' => 'Visa',
        'text_mastercard' => 'MasterCard',
        'text_american_express' => 'American Express',
        'text_jcb' => 'JCB',
        'text_diners_club' => 'Diners Club',

        'label_title' => 'Titre',
        'label_api_login_id' => 'ID de connexion API',
        'label_client_key' => 'Code clients',
        'label_transaction_key' => 'Clé de transaction',
        'label_transaction_mode' => 'Mode de transaction',
        'label_transaction_type' => 'Type de transaction',
        'label_accepted_cards' => 'Cartes acceptées',
        'label_priority' => 'Priorité',
        'label_status' => 'Statut',

        'alert_acceptable_cards' => 'Nous acceptons seulement les %s',
    ],

    'stripe' => [
        'text_tab_general' => 'Général',
        'text_payment_title' => 'Paiements Stripe',
        'text_payment_desc' => 'Accepter les paiements par carte de crédit à l\'aide de Stripe',
        'text_credit_or_debit' => 'Carte de crédit ou de débit',

        'text_auth_only' => 'Autorisation uniquement',
        'text_auth_capture' => 'Autorisation et capture',
        'text_description' => 'Payer par carte de crédit avec Stripe',
        'text_live' => 'Direct',
        'text_test' => 'Tester',
        'text_stripe_charge_description' => '%s Charge pour %s',
        'text_payment_status' => 'Paiement %s (%s)',

        'label_title' => 'Titre ',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Mode de transaction',
        'label_transaction_type' => 'Type de transaction',
        'label_test_secret_key' => 'Tester la clé secrète',
        'label_test_publishable_key' => 'Tester la clé publique',
        'label_live_secret_key' => 'Clé secrète Live',
        'label_live_publishable_key' => 'Clé publique',
        'label_priority' => 'Priorité',
        'label_status' => 'Statut',
    ],

    'mollie' => [
        'text_payment_title' => 'Paiement Mollie',
        'text_payment_desc' => 'Accepter les paiements par carte de crédit en utilisant l\'API Mollie',

        'text_live' => 'Direct',
        'text_test' => 'Test',
        'text_description' => 'Payer par carte de crédit avec Mollie',
        'text_payment_status' => 'Paiement %s (%s)',

        'label_transaction_mode' => 'Mode de transaction',
        'label_test_api_key' => 'Clé API de test',
        'label_live_api_key' => 'Clé d\'API Live',
    ],

    'square' => [
        'text_payment_title' => 'Paiement avec Square',
        'text_payment_desc' => 'Accepter les paiements par carte de crédit avec Square',

        'text_description' => 'Payer par carte de crédit avec Square',
        'text_live' => 'Direct',
        'text_test' => 'Test',
        'text_payment_status' => 'Paiement %s (%s)',

        'label_title' => 'Titre',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Mode de transaction',
        'label_test_app_id' => 'ID de l\'application de test',
        'label_test_access_token' => 'Tester le jeton d\'accès',
        'label_test_location_id' => 'ID de l\'application de test',
        'label_live_app_id' => 'ID de l\'application Live',
        'label_live_access_token' => 'Jeton d\'accès direct',
        'label_live_location_id' => 'ID de Lieu Live',

        'help_square' => 'Obtenir les clés API Square de <a href="https://developer.squareup.com">ici</a>',
    ],
];
