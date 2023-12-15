<?php

return [
    'text_title' => 'Webhooks',
    'text_tab_general' => 'Général',
    'text_tab_setup' => 'Instructions d\'installation',
    'text_outgoing' => 'Webhooks sortants',
    'text_success' => '<span class="text-success">Succès</span>',
    'text_failed' => '<span class="text-danger">Echec</span>',

    'label_enable_authentication' => 'Activer l\'authentification',
    'label_server_signature_header' => 'Nom de l\'en-tête de signature du Webhook',
    'label_headers' => 'En-têtes HTTP supplémentaires',
    'label_timeout_in_seconds' => 'Délai d\'expiration du Webhook',
    'label_tries' => 'Essais de Webhook',
    'label_verify_ssl' => 'Vérifier le certificat SSL',

    'help_enable_authentication' => 'Authentifier les requêtes sortantes de webhook qui nécessitent une authentification.',
    'help_server_signature_header' => 'Le nom de la clé d\'en-tête HTTP où la signature sera ajoutée pour les requêtes sortantes.',
    'help_headers' => 'Ajouter des en-têtes à ajouter à toutes les requêtes sortantes de webhook',
    'help_timeout_in_seconds' => 'Le nombre de secondes qu\'il faudra pour envoyer un webhook avant d\'abandonner.',
    'help_tries' => 'Le nombre de fois à essayer d\'envoyer un webhook avant d\'abandonner.',
    'help_verify_ssl' => 'Vérifiez si le certificat SSL de destination du webhook est valide.',

    'outgoing' => [
        'text_title' => 'Webhooks',
        'text_form_name' => 'Webhook',
        'text_tab_deliveries' => 'Livraisons récentes',
        'text_empty' => 'Il n\'y a pas de webhooks disponibles.',

        'label_url' => 'URL de payload',
        'label_content_type' => 'Type de Contenu',
        'label_verify_ssl' => 'Vérifier SSL',
        'label_secret' => 'Signature secrète',
        'label_events' => 'Événements',
        'label_events_setup' => 'Sélectionnez un événement pour voir les instructions de configuration',
        'label_message' => 'Message',
        'label_event_code' => 'Code de l\'évènement',

        'column_url' => 'URL de payload',

        'help_url' => 'Spécifiez l\'URL pour recevoir les requêtes POST du webhook.',
        'help_content_type' => 'Spécifiez le type de contenu à utiliser lors de la distribution des charges utiles.',
        'help_secret' => 'Définissez un secret webhook pour sécuriser vos requêtes POST webhook. Lors de la création, laissez vide pour en générer une automatiquement.',
        'help_verify_ssl' => 'Vérifier ou non les certificats SSL lors de la livraison des charges utiles',
        'help_events' => 'Quel évènement ce Webhook doit-il déclencher ?',
    ],

    'automation' => [
        'label_webhooks' => 'Webhooks',
        'label_url' => 'Url',
        'label_signature' => 'Clé de signature',

        'help_webhooks' => 'Les Webhooks vous permettent de configurer des intégrations, qui se déclenchent lorsque certains événements se produisent dans TastyIgniter. Lorsqu\'un événement est déclenché, un bloc HTTP POST est envoyé à l\'URL du webhook. Les Webhooks peuvent être utilisés pour envoyer de nouvelles commandes à votre PDV.',
        'help_url' => 'Une requête POST sera envoyée à l\'URL avec les détails des événements abonnés. Le format de données sera JSON',
    ],
];
