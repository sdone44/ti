<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute n\'est pas une URL valide.',
    'after' => ':attribute doit être une date après :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date supérieure ou égale à :date.',
    'alpha' => ':attribute ne peut contenir que des lettres.',
    'alpha_dash' => ':attribute ne peut contenir que des lettres, chiffres, tirets et tirets bas.',
    'alpha_num' => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date avant ou égale à :date.',
    'between' => [
        'numeric' => ':attribute doit être compris entre :min et :max.',
        'file' => ':attribute doit être compris entre :min et :max kilo-octets.',
        'string' => ':attribute doit être compris entre :min et :max caractères.',
        'array' => ':attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean' => ':attribute doit être vrai ou faux.',
    'confirmed' => ':attribute la confirmation ne correspond pas.',
    'date' => ':attribute n\'est pas une date valide.',
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'different' => ':attribute et :other doivent être différents.',
    'digits' => ':attribute doit contenir :digits chiffres.',
    'digits_between' => ':attribute doit être compris entre :min et :max chiffres.',
    'dimensions' => ':attribute a des dimensions d\'image invalides.',
    'distinct' => ':attribute a une valeur en double.',
    'email' => ':attribute doit être une adresse email valide.',
    'ends_with' => ':attribute doit se terminer par un des suivants : :values',
    'exists' => ':attribute sélectionné est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => ':attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être supérieur à :value.',
        'file' => ':attribute doit être supérieur à :value kilo-octets.',
        'string' => ':attribute doit être supérieur à :value caractères.',
        'array' => ':attribute doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être supérieur ou égal à :value.',
        'file' => ':attribute doit être supérieur ou égal à :value kilo-octets.',
        'string' => ':attribute doit être supérieur ou égal à :value caractères.',
        'array' => ':attribute doit avoir :value éléments ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => ':attribute sélectionné est invalide.',
    'in_array' => ':attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => ':attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être inférieur à :value.',
        'file' => ':attribute doit être inférieur à :value kilo-octets.',
        'string' => ':attribute doit être inférieur à :value caractères.',
        'array' => ':attribute doit être inférieur à :value.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être inférieur ou égal à :value.',
        'file' => ':attribute doit être inférieur ou égal à :value kilo-octets.',
        'string' => ':attribute doit être inférieur ou égal à :value caractères.',
        'array' => ':attribute ne doit pas avoir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit pas être supérieur à :max.',
        'file' => ':attribute ne peut pas être supérieur à :max kilo-octets.',
        'string' => ':attribute ne peut pas être supérieur à :max caractères.',
        'array' => ':attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins :min kilo-octets.',
        'string' => ':attribute doit contenir au moins :min caractères.',
        'array' => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in' => ':attribute sélectionné est invalide.',
    'not_regex' => ':attribute le format est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'password' => 'Mot de passe incorrect.',
    'present' => ':attribute le champ doit être rempli.',
    'regex' => ':attribute le format est invalide.',
    'required' => ':attribute le champ est nécessaire.',
    'required_if' => ':attribute le champ est obligatoire quand la valeur de :other est :value.',
    'required_unless' => ':attribute le champ est obligatoire sauf si :other est :values.',
    'required_with' => ':attribute le champ est nécessaire quand :values est présent.',
    'required_with_all' => ':attribute le champ est obligatoire quand :values sont présents.',
    'required_without' => ':attribute le champ est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => ':attribute le champ est requis quand aucune des :values n\'est présente.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilo-octets.',
        'string' => ':attribute doit être :size caractères.',
        'array' => ':attribute doit contenir :size éléments.',
    ],
    'starts_with' => ':attribute doit commencer par l\'une des suivantes : :values',
    'string' => ':attribute doit être une chaîne.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute a déjà été pris.',
    'uploaded' => ':attribute a échoué lors du téléchargement.',
    'url' => ':attribute le format est invalide.',
    'uuid' => ':attribute doit avoir un UUID valide.',
    'valid_time' => ':attribute doit contenir un format 24 heures valide.',
    'valid_date' => ':attribute le champ doit contenir un format de date valide.',

    /*
      |--------------------------------------------------------------------------
      | Custom Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | Here you may specify custom validation messages for attributes using the
      | convention "attribute.rule" to name the lines. This makes it quick to
      | specify a specific custom language line for a given attribute rule.
      |
      */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message personnalisé',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
