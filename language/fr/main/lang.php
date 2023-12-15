<?php
return [
    'site_title' => '%s - %s',
    'site_copyright' => '&copy; %s %s - ',

    'text_free' => 'Gratuit',
    'text_equals' => ' = ',
    'text_plus' => '+',
    'text_minus' => '-',
    'text_minutes' => 'minutes',
    'text_min' => 'min',
    'text_my_account' => 'Mon compte',
    'text_information' => 'Information',
    'text_follow_us' => 'Suivez-nous sur',

    'text_maintenance_enabled' => 'Maintenance activée',

    'menu_home' => 'Page d’accueil',
    'menu_menu' => 'Voir le menu',
    'menu_reservation' => 'Réservation',
    'menu_login' => 'Se Connecter',
    'menu_logout' => 'Déconnexion',
    'menu_register' => 'S\'inscrire',
    'menu_my_account' => 'Mon compte',
    'menu_account' => 'Principal',
    'menu_detail' => 'Modifier Détails',
    'menu_address' => 'Carnet d\'adresses',
    'menu_recent_order' => 'Commandes récentes',
    'menu_recent_reservation' => 'Réservations récentes',
    'menu_locations' => 'Nos emplacements',
    'menu_contact' => 'Contactez-nous',
    'menu_admin' => 'Administrateur',

    'alert_success' => '%s réussi.',
    'alert_error' => 'Une erreur s\'est produite, %s.',
    'alert_error_nothing' => 'Une erreur s\'est produite, aucune %s.',
    'alert_error_try_again' => 'Une erreur s\'est produite, veuillez réessayer.',
    'alert_warning_confirm' => 'Cette action ne peut être annulée ! Êtes-vous sûr de vouloir faire cela ?',
    'alert_custom_error' => 'Une erreur s\'est produite, la page ne peut pas être affichée',

    'alert_no_search_query' => 'Veuillez entrer un code postal ou une adresse pour vérifier si nous pouvons vous livrer.',
    'alert_info_outdated_browser' => 'Vous utilisez un navigateur obsolète. <a href="http://browsehappy.com/">Mettez à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour une meilleure expérience.',

    'components' => [
        'button_new' => 'Ajouter un composant',
        'button_edit' => 'Modifier le composant',
        'button_delete' => 'Supprimer le composant',
    ],

    'media_manager' => [
        'text_title' => 'Gestionnaire de médias',
        'text_heading' => 'Gestionnaire de médias',
        'text_empty' => 'Aucun fichier trouvé.',
        'text_read_only' => 'Lecture seule',
        'text_read_write' => 'Lecture & Ecriture',
        'text_footer_note' => '%s éléments sélectionnés, %s',
        'text_no_access' => 'Pas d\'accès',
        'text_items' => 'Eléments',
        'text_choose' => 'Choisir',
        'text_attach' => 'Joindre',
        'text_sort_by' => 'Trier par',
        'text_filter_search' => 'Rechercher des fichiers et des dossiers...',
        'text_new_folder' => 'Nouveau dossier',
        'text_rename_folder' => 'Renommer le dossier',
        'text_delete_folder' => 'Supprimer le dossier',
        'text_move_folder' => 'Déplacer dossier',
        'text_items_selected' => 'Éléments sélectionnés',
        'text_folder_name' => 'Nom du dossier',
        'text_file_name' => 'Nom du fichier',
        'text_destination_folder' => 'Dossier de destination',

        'button_upload' => 'Charger',
        'button_preview' => 'Aperçu',
        'button_rename' => 'Renommer',
        'button_move' => 'Déplacer',
        'button_copy' => 'Copier',
        'button_delete' => 'Supprimer',
        'button_cancel' => 'Annuler',

        'label_name' => 'Nom',
        'label_date' => 'Date',
        'label_size' => 'Taille',
        'label_type' => 'Type ',
        'label_path' => 'Chemin',
        'label_url' => 'URL',
        'label_dimension' => 'Dimension',
        'label_modified_date' => 'Date Modifiée',
        'label_extension' => 'Extension',
        'label_permission' => 'Autorisation',

        'label_attachment_title' => 'Titre ',
        'label_attachment_description' => 'Description',
        'label_attachment_properties' => 'Propriétés personnalisées',
        'label_attachment_property_key' => 'Clé ',
        'label_attachment_property_value' => 'Valeur',

        'help_existing_files' => 'Le fichier/dossier existant ne sera PAS remplacé',
        'help_attachment_config' => 'Ajouter des propriétés personnalisées pour cette pièce jointe',

        'alert_file_name_required' => 'Veuillez entrer un nom de fichier/dossier:',
        'alert_invalid_file_name' => 'Nom de fichier/dossier invalide',
        'alert_invalid_new_file_name' => 'Nom de fichier/dossier invalide',
        'alert_file_exists' => 'Le fichier/dossier existe déjà',
        'alert_file_not_writable' => 'Permission refusée : le fichier n\'est pas accessible en écriture.',
        'alert_file_not_found' => 'Permission refusée ou fichier introuvable',
        'alert_extension_not_allowed' => 'Cette extension n\'est pas autorisée.',
        'alert_permission' => 'Attention : Vous n\'êtes pas autorisé à %s, contactez l\'administrateur du système.',
        'alert_new_folder_disabled' => 'La création d\'un nouveau dossier est désactivée, vérifiez les paramètres du gestionnaire d\'image/de médias.',
        'alert_rename_disabled' => 'La modification du nom de fichier/dossier est désactivé, vérifiez les paramètres du gestionnaire d\'image/média.',
        'alert_success_new_folder' => 'Le dossier a été créé avec succès',
        'alert_success_rename' => 'Le fichier/dossier a été renommé avec succès.',
        'alert_error_upload' => 'Une erreur s\'est produite lors de l\'enregistrement du fichier, veuillez réessayer.',
        'alert_success_upload' => 'Envoyé avec succès',
        'alert_upload_disabled' => 'L\'envoi est désactivé, vérifiez les paramètres du gestionnaire d\'image/de médias.',
        'alert_invalid_path' => 'Le chemin de téléchargement spécifié est invalide',
        'alert_copy_disabled' => 'La copie de fichier/dossier est désactivée, vérifiez les paramètres du gestionnaire d\'image/de médias.',
        'alert_select_copy_folder' => 'Veuillez sélectionner la destination, la source et le fichier/dossier que vous voulez copier.',
        'alert_select_copy_file' => 'Veuillez sélectionner le fichier/dossier à copier.',
        'alert_select_move_folder' => 'Veuillez sélectionner la destination, la source et le fichier/dossier que vous souhaitez déplacer.',
        'alert_select_move_file' => 'Veuillez sélectionner le fichier/dossier que vous souhaitez déplacer.',
        'alert_success_copy' => 'Fichier/dossier copié avec succès',
        'alert_move_disabled' => 'Le déplacement de fichier/dossier est désactivé, vérifiez les paramètres du gestionnaire d\'image/de médias.',
        'alert_success_move' => 'Fichier/dossier déplacé avec succès',
        'alert_delete_disabled' => 'La suppression du fichier/dossier est désactivée, vérifiez les paramètres du gestionnaire d\'image/de médias.',
        'alert_select_delete_file' => 'Veuillez sélectionner le fichier/dossier que vous souhaitez supprimer.',
        'alert_success_delete' => 'Fichier(s) supprimé(s) avec succès',
    ],

    'home' => [
        'title' => 'Commande en ligne !',
        'text_step_one' => 'Recherche',
        'text_step_two' => 'Choisir',
        'text_step_three' => 'Payer en espèces ou par carte',
        'text_step_four' => 'Profitez',
        'text_step_search' => 'Trouvez et sélectionnez un restaurant qui vous livre en entrant votre code postal ou votre adresse.',
        'text_step_choose' => 'Parcourez des centaines de menus pour trouver la nourriture qui vous plaît.',
        'text_step_pay' => 'C\'est rapide, facile et sécurisé. Payer en espèces à la livraison ou par PayPal.',
        'text_step_enjoy' => 'Les plats sont préparés et livrés à votre porte ou prêts à être retirés au restaurant.',
    ],

    'local' => [
        'text_tab_menu' => 'Menu',
        'text_tab_review' => 'Commentaires',
        'text_tab_info' => 'Infos',
        'text_tab_gallery' => 'Galerie',

        'menus' => [
            'title' => 'Menu',
        ],
        'info' => [
            'title' => 'Infos',
        ],
        'gallery' => [
            'title' => 'Galerie',
        ],
        'reviews' => [
            'title' => 'Commentaires',
        ],
    ],

    'checkout' => [
        'title' => 'Passage en caisse',
        'success' => [
            'title' => 'Confirmation de la commande',
        ],
    ],

    'reservation' => [
        'title' => 'Réservation',
        'success' => [
            'title' => 'Confirmation de réservation',
        ],
    ],

    'cart' => [
        'title' => 'Panier',
    ],

    'locations' => [
        'title' => 'Adresses',
    ],

    'contact' => [
        'title' => 'Contact',
    ],

    'pages' => [
        'title' => 'Pages',
        'text_theme_page' => 'Page de thème',
    ],

    'permissions' => [
        'name' => 'Site public',
        'media_manager' => 'Télécharger et gérer le contenu multimédia',
        'themes' => 'Activer, désactiver, configurer et modifier les thèmes',
    ],

    'account' => [
        'title' => 'Compte',

        'login' => [
            'title' => 'Se Connecter',
            'text_login' => 'Se connecter',
            'text_register' => 'Enregistrez <small>C\'est facile et le sera toujours.</small>',
            'text_forgot' => 'Mot de passe oublié?',
            'text_login_register' => 'Déjà inscrit ? <a href="%s">Connexion</a>',

            'button_login' => 'Se Connecter',
            'button_register' => 'S\'inscrire',
        ],

        'register' => [
            'title' => 'S\'inscrire',
        ],

        'address' => [
            'title' => 'Compte',
        ],

        'settings' => [
            'title' => 'Paramètres',
        ],

        'orders' => [
            'title' => 'Commandes',
        ],

        'reservations' => [
            'title' => 'Réservations',
        ],

        'reviews' => [
            'title' => 'Commentaires',
        ],

        'inbox' => [
            'title' => 'Boîte de réception',
        ],

        'reset' => [
            'title' => 'Mot de passe du compte réinitialisé',
            'text_heading' => 'Mot de passe du compte réinitialisé',
        ],
    ],

    'not_found' => [
        'layout_name' => 'Mise en page [%s] introuvable',
        'page_label' => 'Page introuvable',
        'page_message' => 'La page demandée est introuvable',
        'active_theme' => 'Impossible de charger le thème actif',
        'controller_action' => 'L\'action [%s] n\'est pas trouvée dans le contrôleur [%s]',
        'layout' => 'La mise en page [%s] est introuvable.',
        'component' => 'Le composant [%s] n\'est pas trouvé.',
        'partial' => 'Le [%s] partiel n\'est pas trouvé.',
        'content' => 'Le contenu [%s] est introuvable.',
        'method' => 'La méthode [:method] n\'est pas trouvée dans [:name].',
        'ajax_handler' => 'Le gestionnaire Ajax [%s] est introuvable.',
    ],

    'settings' => [
        'text_tab_media_manager' => 'Média',
        'text_tab_desc_media_manager' => 'Configurer les paramètres de gestion de fichiers.',
    ],
];
