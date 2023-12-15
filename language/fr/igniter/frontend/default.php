<?php

return [

    'text_side_menu' => 'Bannières & Sliders',

    'banners' => [
        'text_tab_general' => 'Général',
        'component_title' => 'Composant de bannière',
        'component_desc' => 'Affiche les bannières',
        'text_edit_banner' => 'Modifier la bannière',
        'text_title' => 'Banners',
        'text_form_name' => 'Bannière',
        'text_filter_search' => 'Recherche par nom, type ou statut.',
        'text_empty' => 'Il n\'y a pas de bannières disponibles.',
        'text_image' => 'Image',
        'text_custom' => 'Personnalisé',

        'column_banner' => 'Bannière',
        'column_dimension' => 'Dimension (L x H)',
        'column_layout_partial' => 'Mise en page - Zone partielle',
        'column_status' => 'Statut',
        'column_id' => 'ID',

        'label_banner' => 'Bannière',
        'label_dimension' => 'Dimension (L x H)',
        'label_width' => 'Largeur',
        'label_height' => 'Hauteur',
        'label_status' => 'Statut',
        'label_layout_partial' => 'Mise en page - Zone partielle',
        'label_type' => 'Type',
        'label_click_url' => 'Click URL',
        'label_language' => 'Langue',
        'label_alt_text' => 'Texte de remplacement',
        'label_image' => 'Image',
        'label_custom_code' => 'Code personnalisé',

        'button_banners' => 'Ajouter une bannière',

        'help_layouts' => 'Choisissez une mise en page pour ajouter une ou plusieurs bannière(s).',
        'help_image' => 'Choisir plusieurs images pour afficher la bannière comme carrousel',
        'help_click_url' => 'Vous pouvez utiliser une URL relative ou absolue du site',

        'alert_set_banners' => 'Vous devez d\'abord ajouter le module de bannières à une ou plusieurs mises en page',
    ],

    'contact' => [
        'component_title' => 'Composant de formulaire de contact',
        'component_desc' => 'Affiche le formulaire de contact',
        'text_heading' => 'Contact',
        'text_summary' => 'N\'hésitez pas à envoyer un message',
        'text_find_us' => 'Nous trouver sur la carte',
        'text_select_subject' => 'sélectionner un sujet',
        'text_contact_us' => 'Nous Contacter',
        'text_general_enquiry' => 'Renseignements généraux',
        'text_comment' => 'Commentaire',
        'text_technical_issues' => 'Problèmes techniques',

        'label_subject' => 'Sujet d\'enquête:',
        'label_full_name' => 'Nom complet :',
        'label_email' => 'Adresse E-mail:',
        'label_telephone' => 'Téléphone :',
        'label_comment' => 'Commentaire',

        'button_send' => 'ENVOYER',

        'alert_contact_sent' => 'Message envoyé avec succès, nous vous répondrons sous peu!',
    ],

    'slider' => [
        'text_title' => 'Sliders',
        'text_tab_general' => 'Général',
        'component_title' => 'Composant du curseur',
        'component_desc' => 'Affiche le curseur des images sur la page d\'accueil',
        'text_form_name' => 'Slider',
        'text_empty' => 'Il n\'y a pas de sliders disponibles.',

        'text_tab_slides' => 'Diapositives',

        'column_updated_at' => 'mis à jour',

        'label_code' => 'Code ',
        'label_slider' => 'Code du slider',
        'label_effect' => 'Effets',
        'label_interval' => 'Délai entre les diapositives',
        'label_caption' => 'Légende',
        'label_images' => 'Images',
        'label_hide_controls' => 'Masquer les commandes',
        'label_hide_indicators' => 'Cacher l\'indicateur',
        'label_hide_captions' => 'Cacher les légendes',
    ],

    'newsletter' => [
        'text_tab_general' => 'Général',
        'component_title' => 'Composant de la newsletter',
        'component_desc' => 'Affiche le formulaire d\'inscription à la newsletter',

        'text_subscribe' => 'Abonnez-vous à notre newsletter',

        'label_status' => 'Statut :',
        'label_email' => 'Email',

        'alert_success_subscribed' => 'Merci, votre email est maintenant validé pour recevoir nos offres',
        'alert_success_existing' => 'Merci, votre email est déjà validé pour recevoir nos offres',
    ],

    'featured' => [
        'text_tab_general' => 'Général',
        'component_title' => 'Composant de menu en vedette',
        'component_desc' => 'Affiche la liste des menus mis en avant',
        'text_subscribe' => 'Abonnez-vous à notre newsletter',
        'text_featured_menus' => 'Menu en vedette',

        'column_menu_name' => 'Nom du menu',
        'column_menu_remove' => 'Supprimer',

        'label_title' => 'Titre ',
        'label_menus' => 'Menus',
        'label_limit' => 'Limite',
        'label_items_per_row' => 'Éléments par ligne',
        'label_dimension' => 'Dimension:',
        'label_dimension_w' => 'Dimension large',
        'label_dimension_h' => 'Dimension haute',

        'help_dimension' => '(Largeur x hauteur)',
        'help_items_per_row' => 'Le nombre d\'éléments à afficher par ligne',
    ],

    'captcha' => [
        'component_title' => 'Composant Captcha',
        'component_desc' => 'Affiche le widget reCATPCHA.',

        'label_api_site_key' => 'Clé du site',
        'label_api_secret_key' => 'Clé secrète',
        'label_version' => 'Version',
        'label_version_v2' => 'reCAPTCHA v2',
        'label_version_invisible' => 'reCAPTCHA v2 invisible',
        'label_version_v3' => 'reCAPTCHA v3',
        'label_lang' => 'Langue',

        'error_recaptcha' => 'S\'il vous plait, veuillez confirmer que vous êtes une personne!',

        'help_lang' => 'Force le widget à s\'afficher dans une langue spécifique. Auto - détecte la langue de l\'utilisateur si elle n\'est pas spécifiée.',
    ],
];
