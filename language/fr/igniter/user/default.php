<?php

return [
    'text_title' => 'Mon compte',

    'text_heading' => 'Compte',
    'text_account' => 'Mon compte',
    'text_edit_details' => 'Modifier les informations',
    'text_address' => 'Carnet d’adresses',
    'text_orders' => 'Commandes récentes',
    'text_reservations' => 'Réservations récentes',
    'text_inbox' => 'Ma boîte de réception',
    'text_welcome' => 'Bienvenue %s',
    'text_cart_summary' => 'Vous avez %s éléments : %s',
    'text_change_password' => 'Changer de mot de passe',
    'text_order' => 'COMMANDER MAINTENANT',
    'text_checkout' => 'PAYER  MAINTENANT',
    'text_edit' => 'ÉDITER',
    'text_set_default' => 'PAR DÉFAUT',
    'text_default_address' => 'Adresse par défaut',
    'text_no_default_address' => 'Vous n\'avez pas d\'adresse par défaut',
    'text_no_orders' => 'Il n\'y a aucune commande disponible à afficher.',
    'text_no_reservations' => 'Il n’y a aucun commande disponible.',
    'text_no_inbox' => 'Il n\'y a aucun message disponible à afficher',
    'text_no_cart_items' => 'Il n\'y a aucun menu ajouté à votre panier.',

    'text_logout' => 'Déconnexion',
    'text_logged_in' => 'Vous avez déjà un compte ? <a href="%s"> Connectez-vous ici</a>',
    'text_logged_out' => 'Bienvenue <b>%s</b>, Non vous ? <a href="javascript:;" data-request="%s">Déconnexion</a>',

    'label_heading' => 'En-tête :',
    'label_template' => 'Modèle de courriel',
    'label_send_to' => 'Envoyer à',
    'label_send_to_staff_group' => 'Envoyer au groupe d\'employés',
    'label_send_to_custom' => 'Envoyer à l\'adresse e-mail',

    'column_date' => 'Date / Heure',
    'column_subject' => 'Objet',

    'alert_logout_success' => 'Vous avez été déconnecté avec succès !',

    'text_send_to_restaurant' => 'Adresse e-mail du restaurant',
    'text_send_to_location' => 'Adresse email de localisation (si disponible)',
    'text_send_to_staff_email' => 'Adresse email des employés (si disponible)',
    'text_send_to_customer_email' => 'Adresse email du client (si disponible)',
    'text_send_to_custom' => 'Adresse e-mail spécifique',
    'text_send_to_staff_group' => 'Groupe d\'employés',

    'login' => [
        'label_password' => 'Mot de passe',
        'label_password_confirm' => 'Confirmer mot de passe',
        'label_remember' => 'Se souvenir de moi',
        'label_activation' => 'Code d\'Activation',
        'label_newsletter' => 'Tenez-moi au courant des offres par courriel.',
        'label_terms' => 'En cliquant sur Inscription, vous acceptez les <a target="_blank" href="%s">conditions générales</a> définies par ce site, y compris notre utilisation des cookies.',
        'label_i_agree' => 'J\'accepte',
        'label_subscribe' => 'S\'inscrire',

        'button_terms_agree' => 'J\'accepte',
        'button_subscribe' => 'S’abonner',
        'button_login' => 'Se Connecter',
        'button_register' => 'S\' enregistrer',

        'error_email_exist' => 'L\'adresse e-mail est déjà associée à un compte, veuillez vous connecter',

        'alert_logout_success' => 'Vous avez été déconnecté avec succès !',
        'alert_expired_login' => 'Session expirée. Veuillez vous connecter à nouveau.',
        'alert_invalid_login' => 'Nom d\'utilisateur et mot de passe introuvables !',
        'alert_account_created' => 'Compte créé avec succès, connectez-vous ci-dessous !',
        'alert_account_activation' => 'Un e-mail d\'activation a été envoyé à votre adresse e-mail.',
        'alert_registration_disabled' => 'L\'inscription est actuellement désactivée par l\'administrateur du site.',

        'activity_registered_account_title' => 'Le client a bien été enregistré',
        'activity_registered_account' => '<b>:properties.full_name</b> a créé un compte.',
    ],

    'session' => [
        'component_title' => 'Composant de session',
        'component_desc' => 'Ajoute une session d\'authentification à une page et restreint l\'accès à la page.',
    ],

    'account' => [
        'component_title' => 'Composant du compte',
        'component_desc' => 'Affiche le tableau de bord du compte',
        'text_heading' => 'Carnet d’adresses',
        'text_my_account' => 'Mon compte',
        'text_edit_heading' => 'Éditer le carnet d\'adresses',
        'text_no_address' => 'Vous n’avez aucune adresse(s) enregistrée(s)',
        'text_edit' => 'ÉDITER',
        'text_delete' => 'SUPPRIMER',

        'button_back' => 'Précédent',
        'button_add' => 'Ajouter une nouvelle adresse',
        'button_update' => 'Modifier l\'adresse',

        'label_address_1' => 'Adresse 1',
        'label_address_2' => 'Adresse 2',
        'label_city' => 'Ville ',
        'label_state' => 'État',
        'label_postcode' => 'Code postal',
        'label_country' => 'Pays',

        'alert_updated_success' => 'L\'adresse a été mise à jour avec succès',
        'alert_deleted_success' => 'Adresse supprimée avec succès.',
    ],
    'reset' => [
        'component_title' => 'Composant de réinitialisation de mot de passe',
        'component_desc' => 'Affiche le formulaire de réinitialisation de mot de passe',

        'text_heading' => 'Réinitialisation du mot de passe',
        'text_summary' => 'Adresse e-mail que vous utilisez pour vous connecter à votre compte. Nous vous enverrons un e-mail avec un nouveau mot de passe.',

        'label_email' => 'Adresse mail',
        'label_password' => 'Mot de passe',
        'label_password_confirm' => 'Confirmez le mot de passe',
        'label_code' => 'Réinitialisez le code',

        'button_login' => 'Se Connecter',
        'button_reset' => 'Réinitialiser le mot de passe',

        'alert_reset_success' => 'Mot de passe réinitialisé avec succès.',
        'alert_reset_request_success' => 'Demande de réinitialisation de mot de passe réussie, veuillez vérifier votre email pour savoir comment procéder.',
        'alert_reset_error' => 'Mot de passe réinitialisé échoué, e-mail introuvable ou informations saisies incorrectes.',
        'alert_reset_failed' => 'La réinitialisation du mot de passe a échoué, le code de réinitialisation est invalide ou expiré.',
        'alert_activation_failed' => 'L\'activation du compte a échoué, veuillez réessayer.',
        'alert_no_email_match' => 'Aucune adresse e-mail correspondante',
    ],
    'addressbook' => [
        'component_title' => 'Composant du carnet d\'adresses',
        'component_desc' => 'Affiche et gère le carnet d\'adresses',
    ],
    'settings' => [
        'component_title' => 'Composant des paramètres du compte',
        'component_desc' => 'Gérer les paramètres de compte',
        'text_heading' => 'Mes informations',
        'text_details' => 'Modifier vos informations',
        'text_password_heading' => 'Changer de mot de passe',

        'button_subscribe' => 'S\'inscrire',
        'button_back' => 'Retour',
        'button_save' => 'Enregistrer les informations',

        'label_first_name' => 'Prénom',
        'label_last_name' => 'Nom',
        'label_email' => 'Adresse mail',
        'label_password' => 'Nouveau mot de passe',
        'label_password_confirm' => 'Confirmer votre nouveau mot de passe',
        'label_old_password' => 'Ancien mot de passe',
        'label_telephone' => 'Téléphone',
        'label_s_question' => 'Question de sécurité',
        'label_s_answer' => 'Réponse secrète',
        'label_newsletter' => 'Restez au courant des offres par courriel.',

        'error_password' => 'Le %s que vous avez saisi ne correspond pas.',

        'alert_updated_success' => 'Informations mise à jour avec succès.',
    ],
];
