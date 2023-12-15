<?php

return [
    'search_prompt' => 'Chercher un nom Api',
    'search_tokens_prompt' => 'Rechercher un jeton',

    'text_tab_general' => 'Général',
    'text_tokens_title' => 'Jetons d’accès',
    'text_token_type_staff' => 'Equipe',
    'text_token_type_customer' => 'Client',
    'text_guest' => 'Invités',
    'text_admin' => 'Equipe',
    'text_customer' => 'Client',
    'text_admin_customer' => 'Personnel ou clients',
    'text_all' => 'Tous',
    'text_allow_only' => 'Autorisés uniquement',

    'button_tokens' => '<i class="fa fa-key"></i>&nbsp;&nbsp;Jetons d\'accès',

    'column_api_name' => 'Nom de l’API',
    'column_base_endpoint' => 'Base Endpoint',
    'column_description' => 'Description',

    'column_issued_to' => 'Émis à',
    'column_token_type' => 'Type',
    'column_device_name' => 'Nom de l’appareil',
    'column_created' => 'Créé le',
    'column_lastused' => 'Dernière utilisation',

    'label_api_name' => 'Nom de l’API',
    'label_base_endpoint' => 'Base Endpoint',
    'label_description' => 'Description',
    'label_api_name_comment' => 'Nom de votre ressource API',
    'label_description_comment' => 'Décrivez votre ressource API',
    'label_base_endpoint_comment' => 'https://exemple.com/api/<b>point de terminaison</b>',

    'label_controller' => 'Controleur',
    'label_actions' => 'Actions',
    'help_actions' => 'Laisser vide pour désactiver le terminal.',
    'label_require_authorization' => 'Nécessite une autorisation',
    'label_setup' => 'Documents de référence',

    'actions' => [
        'text_index' => 'Lister toutes les ressources (GET)',
        'text_show' => 'Afficher une seule ressource (GET)',
        'text_store' => 'Créer une ressource',
        'text_update' => 'Mettre à jour une ressource (PUT/PATCH)',
        'text_destroy' => 'Supprimer une ressource (DELETE)',
    ],

    'alert_auth_failed' => 'Aucun jeton API valide fourni.',
    'alert_auth_restricted' => 'Le jeton API n\'a pas les permissions pour effectuer la requête.',
    'alert_token_restricted' => 'Le jeton de l\'API n\'a pas les bonnes capacités pour effectuer cette action',
    'alert_validation_failed' => 'Impossible de valider les paramètres de la requête',
];
