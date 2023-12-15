<?php

return [
    'text_tab_sms' => 'SMS',
    'text_tab_alert' => 'Alert (eg. slack)',
    'text_send_to_location_tel' => 'Numéro de téléphone de la localisation (si disponible)',
    'text_send_to_customer_tel' => 'Numéro de téléphone du client (si disponible)',
    'text_send_to_order_tel' => 'Numéro de téléphone de la commande (si disponible)',
    'text_send_to_reservation_tel' => 'Numéro de téléphone de réservation (si disponible)',
    'text_send_to_custom_tel' => 'Spécifié le numéro de téléphone ',

    'setting_title' => 'Configurer les canaux SMS',
    'setting_desc' => 'Configurer les paramètres twilio, plivo, nexmo ou clickatell.',

    'label_template' => 'Modèle du SMS',
    'label_send_to' => 'Envoyer à',
    'label_send_to_custom' => 'Envoyer au numéro de téléphone',

    'help_template' => 'Pour personnaliser les modèles de SMS, allez dans Design -> Modèles de SMS.',

    'nexmo' => [
        'text_title' => 'Canal de SMS Nexmo',
        'text_desc' => 'Envoi de notifications SMS en utilisant Nexmo.',
    ],

    'twilio' => [
        'text_title' => 'Canal SMS Twilio',
        'text_desc' => 'Envoi de notifications SMS en utilisant Twilio.',
    ],

    'clickatell' => [
        'text_title' => 'Canal SMS Clickatell',
        'text_desc' => 'Envoi de notifications SMS en utilisant Clickatell.',
    ],

    'plivo' => [
        'text_title' => 'Canal SMS Plivo',
        'text_desc' => 'Envoi de notifications SMS en utilisant Plivo.',
    ],

    'channel' => [
        'text_title' => 'Canaux SMS',
        'text_new_title' => 'Canal SMS: Nouveau',
        'text_edit_title' => 'Canal SMS: Mise à jour',
        'text_preview_title' => 'Canal SMS: Aperçu',
        'text_form_name' => 'Canal SMS',
        'text_empty' => 'Aucun canal SMS ajouté',

        'column_label' => 'Libellé',
        'column_description' => 'Description',
        'column_updated_at' => 'Mise à jour le',
        'column_created_at' => 'Créé le',

        'label_channel' => 'Canal',
        'label_label' => 'Libellé',
        'label_code' => 'Code ',
    ],

    'template' => [
        'text_title' => 'Modèles de SMS',
        'text_new_title' => 'Modèle SMS : Nouveau',
        'text_edit_title' => 'Modèle SMS : Mise à jour',
        'text_preview_title' => 'Modèle SMS : Aperçu',
        'text_form_name' => 'Modèle du SMS',
        'text_empty' => 'Aucun modèle de SMS ajouté',
        'text_order_placed' => 'Notification SMS de confirmation de commande au personnel.',
        'text_order_status_changed' => 'Le statut de la commande a changé la notification SMS au client.',
        'text_order_assigned' => 'Notification par SMS assignée au personnel.',
        'text_new_reservation' => 'Notification SMS de confirmation de réservation au personnel.',
        'text_reservation_status_changed' => 'Le statut de la réservation a changé la notification SMS au client.',
        'text_reservation_assigned' => 'Notification de réservation assignée par SMS au personnel.',
        'text_order_confirmed' => 'Notification par sms de confirmation de commande au client.',
        'text_reservation_confirmed' => 'Réservation confirmée notification sms au client.',

        'column_name' => 'Nom',
        'column_updated_at' => 'Mise à jour le',
        'column_created_at' => 'Créé le',

        'label_content' => 'Message',

        'button_test_message' => 'Envoyer un message test',

        'alert_test_message_sent' => 'Message SMS de test envoyé avec succès à %s',
    ],
];
