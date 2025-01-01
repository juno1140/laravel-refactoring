<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデータクラスで使用されるデフォルトのエラーメッセージです。
    | いくつかのルールには複数のバージョンがあり、サイズルールにはそのような
    | バージョンがあります。メッセージを自由に調整してご利用ください。
    |
    */

    'accepted' => ':attribute は承認される必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute は承認される必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date より後の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date 以降の日付でなければなりません。',
    'alpha' => ':attribute は文字のみを含むことができます。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含むことができます。',
    'alpha_num' => ':attribute は文字と数字のみを含むことができます。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute にはシングルバイトの英数字と記号のみ使用できます。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date 以前の日付でなければなりません。',
    'between' => [
        'array' => ':attribute の項目数は :min ～ :max の間でなければなりません。',
        'file' => ':attribute のファイルサイズは :min ～ :max KBの間でなければなりません。',
        'numeric' => ':attribute は :min ～ :max の間でなければなりません。',
        'string' => ':attribute の文字数は :min ～ :max 文字の間でなければなりません。',
    ],
    'boolean' => ':attribute は true または false でなければなりません。',
    'can' => ':attribute に不正な値が含まれています。',
    'confirmed' => ':attribute の確認が一致しません。',
    'contains' => ':attribute に必要な値が含まれていません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format の形式と一致していません。',
    'decimal' => ':attribute は小数点以下 :decimal 桁でなければなりません。',
    'declined' => ':attribute は辞退される必要があります。',
    'declined_if' => ':other が :value の場合、:attribute は辞退される必要があります。',
    'different' => ':attribute と :other は異なる値でなければなりません。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min 桁から :max 桁の間でなければなりません。',
    'dimensions' => ':attribute の画像サイズが不正です。',
    'distinct' => ':attribute に重複した値があります。',
    'doesnt_end_with' => ':attribute は :values のいずれかで終了してはいけません。',
    'doesnt_start_with' => ':attribute は :values のいずれかで始まってはいけません。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は :values のいずれかで終了しなければなりません。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'extensions' => ':attribute は :values のいずれかの拡張子でなければなりません。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute は値が必要です。',
    'gt' => [
        'array' => ':attribute の項目数は :value 個より多くなければなりません。',
        'file' => ':attribute のファイルサイズは :value KBより大きくなければなりません。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string' => ':attribute は :value 文字より多くなければなりません。',
    ],
    'gte' => [
        'array' => ':attribute の項目数は :value 個以上でなければなりません。',
        'file' => ':attribute のファイルサイズは :value KB以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'hex_color' => ':attribute は正しい16進数カラーでなければなりません。',
    'image' => ':attribute は画像ファイルでなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute は :other に存在していません。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'list' => ':attribute はリスト形式でなければなりません。',
    'lowercase' => ':attribute は小文字でなければなりません。',
    'lt' => [
        'array' => ':attribute の項目数は :value 個未満でなければなりません。',
        'file' => ':attribute のファイルサイズは :value KB未満でなければなりません。',
        'numeric' => ':attribute は :value 未満でなければなりません。',
        'string' => ':attribute は :value 文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attribute の項目数は :value 個以下でなければなりません。',
        'file' => ':attribute のファイルサイズは :value KB以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string' => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attribute の項目数は :max 個を超えてはいけません。',
        'file' => ':attribute のファイルサイズは :max KBを超えてはいけません。',
        'numeric' => ':attribute は :max を超えてはいけません。',
        'string' => ':attribute は :max 文字を超えてはいけません。',
    ],
    'max_digits' => ':attribute は :max 桁を超えてはいけません。',
    'mimes' => ':attribute は :values タイプのファイルでなければなりません。',
    'mimetypes' => ':attribute は :values タイプのファイルでなければなりません。',
    'min' => [
        'array' => ':attribute の項目数は :min 個以上でなければなりません。',
        'file' => ':attribute のファイルサイズは :min KB以上でなければなりません。',
        'numeric' => ':attribute は :min 以上でなければなりません。',
        'string' => ':attribute は :min 文字以上でなければなりません。',
    ],
    'min_digits' => ':attribute は最低 :min 桁が必要です。',
    'missing' => ':attribute は存在してはいけません。',
    'missing_if' => ':other が :value の場合、:attribute は存在してはいけません。',
    'missing_unless' => ':other が :value でない限り、:attribute は存在してはいけません。',
    'missing_with' => ':values が存在する場合、:attribute は存在してはいけません。',
    'missing_with_all' => ':values がすべて存在する場合、:attribute は存在してはいけません。',
    'multiple_of' => ':attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式が無効です。',
    'numeric' => ':attribute は数値でなければなりません。',
    'password' => [
        'letters' => ':attribute には少なくとも1文字のアルファベットが含まれていなければなりません。',
        'mixed' => ':attribute には大文字と小文字をそれぞれ少なくとも1文字含む必要があります。',
        'numbers' => ':attribute には少なくとも1つの数字が含まれていなければなりません。',
        'symbols' => ':attribute には少なくとも1つの記号が含まれていなければなりません。',
        'uncompromised' => '提供された :attribute は過去のデータ漏洩で使用された可能性があります。別の :attribute を使用してください。',
    ],
    'present' => ':attribute が存在している必要があります。',
    'present_if' => ':other が :value の場合、:attribute が存在している必要があります。',
    'present_unless' => ':other が :value でない限り、:attribute が存在している必要があります。',
    'present_with' => ':values が存在する場合、:attribute が存在している必要があります。',
    'present_with_all' => ':values がすべて存在する場合、:attribute が存在している必要があります。',
    'prohibited' => ':attribute は入力を禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute は入力を禁止されています。',
    'prohibited_unless' => ':other が :values に含まれていない限り、:attribute は入力を禁止されています。',
    'prohibits' => ':attribute により :other の入力が禁止されています。',
    'regex' => ':attribute の形式が無効です。',
    'required' => ':attribute は必須項目です。',
    'required_array_keys' => ':attribute は次のキーを含む必要があります: :values。',
    'required_if' => ':other が :value の場合、:attribute は必須です。',
    'required_if_accepted' => ':other が承認されている場合、:attribute は必須です。',
    'required_if_declined' => ':other が辞退されている場合、:attribute は必須です。',
    'required_unless' => ':other が :values に含まれていない限り、:attribute は必須です。',
    'required_with' => ':values が存在する場合、:attribute は必須です。',
    'required_with_all' => ':values がすべて存在する場合、:attribute は必須です。',
    'required_without' => ':values が存在しない場合、:attribute は必須です。',
    'required_without_all' => ':values がいずれも存在しない場合、:attribute は必須です。',
    'same' => ':attribute と :other は一致していなければなりません。',
    'size' => [
        'array' => ':attribute の項目数は :size 個でなければなりません。',
        'file' => ':attribute のファイルサイズは :size KBでなければなりません。',
        'numeric' => ':attribute は :size でなければなりません。',
        'string' => ':attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => ':attribute は :values のいずれかで始まらなければなりません。',
    'string' => ':attribute は文字列でなければなりません。',
    'timezone' => ':attribute は有効なタイムゾーンでなければなりません。',
    'unique' => ':attribute はすでに使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字でなければなりません。',
    'url' => ':attribute は有効なURLでなければなりません。',
    'ulid' => ':attribute は有効なULIDでなければなりません。',
    'uuid' => ':attribute は有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "attribute.rule" の規則で特定のカスタムメッセージを設定できます。
    | これにより、ある特定の属性ルールに対して素早くカスタム言語行を指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、例えば "email" を "メールアドレス" のように置き換えて、
    | プレースホルダーにわかりやすい名前を付けるために使用されます。
    | これにより、メッセージをより表現豊かにすることができます。
    |
    */

    'attributes' => [],

];
