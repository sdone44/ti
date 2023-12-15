<?php

return [
    'text_tab_general' => 'Général',
    'text_component_title' => 'Composant de la réservation',
    'text_component_desc' => 'Affiche le formulaire de réservation',

    'text_heading' => 'Réserver une table',
    'text_success_heading' => 'Confirmation de réservation',
    'text_time_heading' => 'Choisir l\'heure',
    'text_reservation' => 'Ma réservation',
    'text_heading_success' => 'Réservation confirmée',
    'text_no_table' => 'Pas de tables disponibles dans le restaurant.',
    'text_find_msg' => 'Veuillez utiliser le formulaire ci-dessous pour réserver une table',
    'text_time_msg' => 'Horaires de réservation disponibles sur %s pour %s invités',
    'text_no_time_slot' => '<span class="text-danger">Aucun créneau de réservation disponible, veuillez vérifier les détails de votre table.</span>',
    'text_location_closed' => 'Désolé, mais nous sommes fermés, revenez pendant les heures d\'ouverture',
    'text_date_format' => '%D, %M %j, %Y',
    'text_person' => 'personne',
    'text_people' => 'personnes',

    'text_subject' => 'Table Réservée - %s!',
    'text_greetings' => 'Merci %s,',
    'text_success_message' => 'Votre réservation chez %s a été enregistrée pour %s le %s.<br />Merci pour votre réservation en ligne !',

    'label_status' => 'Statut',
    'label_location' => 'Lieu',
    'label_guest_num' => 'Nombre d\'invités',
    'label_date' => 'Date',
    'label_time' => 'Heure',
    'label_occasion' => 'Occasion',
    'label_select' => '- veuillez sélectionner -',

    'label_first_name' => 'Prénom',
    'label_last_name' => 'Nom',
    'label_email' => 'Adresse e-mail',
    'label_confirm_email' => 'Confirmer l\'adresse e-mail',
    'label_telephone' => 'Telephone',
    'label_comment' => 'Demandes spéciales',

    'button_find_table' => 'Chercher une table',
    'button_select_time' => 'Choisir l\'heure',
    'button_change' => 'Modifier les informations',
    'button_reset' => 'Remettre à zéro',

    'button_find_again' => 'Retrouver la table',
    'button_reservation' => 'Terminer la réservation',

    'error_invalid_location' => 'L\'emplacement sélectionné est invalide.',
    'error_invalid_date' => 'La date doit être postérieure à aujourd\'hui, vous ne pouvez faire que des réservations futures!',
    'error_invalid_datetime' => 'La date de réservation sélectionnée est invalide',
    'error_invalid_time' => 'La réservation doit se faire pendant les heures d\'ouverture du restaurant !',

    'alert_reservation_disabled' => 'La réservation a été désactivée, veuillez contacter l\'administrateur.',
    'alert_no_table_available' => 'Aucune table trouvée pour le nombre d\'invités spécifié.',
    'alert_fully_booked' => 'Toutes nos tables sont réservées pour la date et l\'heure demandée, veuillez sélectionner une date ou heure différente.',

    'activity_reservation_created_title' => 'Nouvelle réservation.',
    'activity_reservation_created' => '<b>:properties.full_name</b> a créé une réservation.',

    'reservations' => [
        'component_title' => 'Paramètres de compte pour les réservations',
        'component_desc' => 'Affiche et gère les réservations',
        'text_heading' => 'Réservations récentes',
        'text_my_account' => 'Mon compte',
        'text_view_heading' => 'Aperçu de ma réservation',
        'text_empty' => 'Il n\'y a pas de réservation(s).',

        'column_id' => 'ID de réservation',
        'column_status' => 'Statut',
        'column_location' => 'Situation',
        'column_date' => 'Heure - Date',
        'column_table' => 'Nom de la table',
        'column_guest' => 'Numéro d\'invité',
        'column_occasion' => 'Occasion',
        'column_telephone' => 'Téléphone',
        'column_comment' => 'Commentaire',

        'button_reserve' => 'Faire la réservation',
        'button_cancel' => 'Annuler la réservation',
        'button_back' => 'Retour',
        'btn_view' => 'Aperçu',

        'alert_cancel_success' => 'La réservation a bien été annulée.',
        'alert_cancel_failed' => 'Impossible d\'annuler la réservation, veuillez nous contacter.',
    ],
];
