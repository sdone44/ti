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
    'accepted' => ':attribute 是被接受的',
    'active_url' => ':attribute 不是有效的 URL。',
    'after' => ':attribute 必須在 :date 之後',
    'after_or_equal' => ':attribute 必須要等於 :date 或更晚。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、數字和橫線。',
    'alpha_num' => ':attribute 只能包含數字和字母。',
    'array' => ':attribute 必須是一個陣列。',
    'before' => ':attribute 必須在 :date 之前',
    'before_or_equal' => ':attribute 必須在 :date 之前',
    'between' => [
        'numeric' => ':attribute 必須在 :min 和 :max 之間。',
        'file' => ':attribute 必須介於 :min 至 :max KB 之間。 ',
        'string' => ':attribute的長度必須於 :min 與 :max 之間。',
        'array' => ':attribute 的數目必須在 :min 到 :max 之間。',
    ],
    'boolean' => ':attribute 必須為 true 或 false。',
    'confirmed' => ':attribute 確認欄位的輸入不一致。',
    'date' => ':attribute 不是有效日期',
    'date_equals' => ':attribute 必須等於 :date。',
    'date_format' => ':attribute 不符合格式 :format 。',
    'different' => ':attribute 和 :other 不能相同。',
    'digits' => ':attribute 必須是 :digits 數字',
    'digits_between' => ':attribute 必須介於 :min 至 :max 位數字。',
    'dimensions' => ':attribute 圖片尺寸不正確。',
    'distinct' => ':attribute 已被使用。',
    'email' => ':attribute 必須是有效的電子郵件位址。',
    'ends_with' => ':attribute 必須以 :values 為結尾。',
    'exists' => '選定的 :attribute 是無效的',
    'file' => ':attribute 必須是有效的檔案。',
    'filled' => ':attribute 欄位必須有一個值',
    'gt' => [
        'numeric' => ':attribute 必須大於 :value。',
        'file' => ':attribute 必須大於 :value KB。',
        'string' => ':attribute 必須多於 :value 個字元。',
        'array' => ':attribute 必須多於 :value 個元素。',
    ],
    'gte' => [
        'numeric' => ':attribute 必須大於或等於 :value。',
        'file' => ':attribute 必須大於或等於 :value KB。',
        'string' => ':attribute 必須多於或等於 :value 個字元。',
        'array' => 'The :attribute必須具有：value項或更多。',
    ],
    'image' => ':attribute 必須是圖片',
    'in' => '選中的 :attribute 無效。',
    'in_array' => '欄位 :attribute 不存在於 :other。',
    'integer' => ':attribute 必須是整數',
    'ip' => ':attribute 必須是一個有效的 IP 地址。',
    'ipv4' => ':attribute 必須是有效的 IPv4 位址',
    'ipv6' => ':attribute 必須是一個有效的 IPv6 位址。',
    'json' => ':attribute 必須是有效的 JSON 字串',
    'lt' => [
        'numeric' => ':attribute必須小於:value。',
        'file' => ':attribute 必須小於 :value KB。',
        'string' => 'The :attribute必須小於：value字符。',
        'array' => 'The :attribute必須少於：value個項目。',
    ],
    'lte' => [
        'numeric' => ':attribute 必須小於或等於 :value。',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',
    'valid_time' => 'The :attribute must contain a valid 24-hour time format.',
    'valid_date' => 'The :attribute field must contain a valid date format.',

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
            'rule-name' => 'custom-message',
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
