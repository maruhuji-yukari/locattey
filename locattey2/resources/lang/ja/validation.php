<?php

//Google翻訳結果よりコピペ

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

    'accepted' => ':attribute を受け入れる必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は:date より後の日付でなければなりません。',
    'after_or_equal' => ':attribute は:date 以降の日付でなければなりません。',
    'alpha' => ':attribute には文字のみを含めることができます。',
    'alpha_dash' => ':attribute には文字、数字、ダッシュ、アンダースコアのみを含めることができます。',
    'alpha_num' => ':attribute には文字と数字のみを含めることができます。',
    'array' => ':attribute は配列でなければなりません。',
    'before' => ':attribute は:date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は、:date より前または等しい日付でなければなりません。',
    'between' => [
        'numeric' => ':attribute は:min と:max の間でなければなりません',
        'file' => ':attribute は:min から:max KBでなければなりません。',
        'string' => ':attribute は:min から:max までの文字でなければなりません。',
        'array' => ':attribute には:min から:max までのアイテムが必要です。',
    ],
    'boolean' => ':attribute フィールドはtrueまたはfalseでなければなりません。',
    'confirmed' => ':attribute 確認が一致しません。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は:date と等しい日付でなければなりません。',
    'date_format' => ':attribute はフォーマット:format と一致しません。',
    'different' => ':attribute と:other は異なる必要があります。',
    'digits' => ':attribute は:digits digitsでなければなりません。',
    'digits_between' => ':attribute は:min と:max digitsの間でなければなりません。',
    'dimensions' => ':attribute に無効な画像サイズがあります。',
    'distinct' => ':attribute フィールドの値が重複しています。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は次のいずれかで終わる必要があります: :values。',
    'exists' => '選択された:attribute は無効です。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'numeric' => ':attribute は:value より大きくなければなりません。',
        'file' => ':attribute は:value KBより大きくなければなりません。',
        'string' => ':attribute は:value 文字より大きくなければなりません。',
        'array' => ':attribute には:value を超えるアイテムが必要です。',
    ],
    'gte' => [
        'numeric' => ':attribute は:value 以上でなければなりません。',
        'file' => ':attribute は:value KB以上でなければなりません。',
        'string' => ':attribute は:value 文字以上である必要があります。',
        'array' => ':attribute には:value アイテム以上が必要です。',
    ],
    'img' => ':attribute は画像でなければなりません。',
    'in' => '選択された:attribute は無効です。',
    'in_array' => ':attribute フィールドは:other に存在しません。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'lt' => [
        'numeric' => ':attribute は:value より小さくなければなりません。',
        'file' => ':attribute は:value KB未満でなければなりません。',
        'string' => ':attribute は:value 文字未満である必要があります。',
        'array' => ':attribute には:value より少ない項目が必要です。',
    ],
    'lte' => [
        'numeric' => ':attribute は:value 以下でなければなりません。',
        'file' => ':attribute は:value KB以下でなければなりません。',
        'string' => ':attribute は:value 文字以下でなければなりません。',
        'array' => ':attribute には:value を超えるアイテムを含めることはできません。',
    ],
    'max' => [
        'numeric' => ':attribute は:max を超えることはできません。',
        'file' => ':attribute は:max KB以下にする必要があります。',
        'string' => ':attribute は:max 文字以下にする必要があります。',
        'array' => ':attribute には:max を超えるアイテムを含めることはできません。',
    ],
    'mimes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'mimetypes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'min' => [
        'numeric' => ':attribute は少なくとも:min でなければなりません。',
        'file' => ':attribute は少なくとも:min KBでなければなりません。',
        'string' => ':attribute は少なくとも:min 文字でなければなりません。',
        'array' => ':attribute には少なくとも:min アイテムが必要です。',
    ],
    'not_in' => '選択した :attribute は無効です。',
    'not_regex' => ':attribute 形式が無効です。',
    'numeric' => ':attribute は数値でなければなりません。',
    'password' => 'パスワードが間違っています。',
    'present' => ':attribute フィールドが存在する必要があります。',
    'regex' => ':attribute フォーマットが無効です。',
    'required' => ':attribute フィールドは必須です。',
    'required_if' => ':other が:value の場合、:attribute フィールドは必須です',
    'required_unless' => ':other が:values にない限り、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':value が存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と:other は一致する必要があります',
    'size' => [
        'numeric' => ':attribute  は:size でなければなりません。',
        'file' => ':attribute は:size KBでなければなりません。',
        'string' => ':attribute は:size 文字でなければなりません。',
        'array' => ':attribute には:size アイテムを含める必要があります。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります: :values。',
    'string' => ':attribute は文字列でなければなりません。',
    'timezone' => ':attribute は有効なゾーンでなければなりません。',
    'unique' => ':attribute はすでに取得されています。',
    'uploaded' => ':attribute はアップロードに失敗しました。',
    'url' => ':attribute 形式が無効です',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',

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
