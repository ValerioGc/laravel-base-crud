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

    'accepted' => ':attribute deve essere accettato.',
    'active_url' => ':attribute non è un URL valido.',
    'after' => ':attribute deve essere una data successiva a :date.',
    'after_or_equal' => ':attribute deve essere una data successiva o uguale a :date.',
    'alpha' => ':attribute può contenere solo lettere.',
    'alpha_dash' => ':attribute può contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => ':attribute può contenere solo lettere e numeri.',
    'array' => ':attribute deve essere un array.',
    'before' => ':attribute deve essere una data prima di :date.',
    'before_or_equal' => ':attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'file' => ':attribute deve essere compreso tra :min e :max kilobyte.',
        'string' => ':attribute deve essere compreso tra :min e :max caratteri.',
        'array' => ':attribute deve avere elementi compresi tra :min e :max.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma :attribute non corrisponde.',
    'date' => ':attribute non è una data valida.',
    'date_equals' => ':attribute deve essere una data uguale a :date.',
    'date_format' => ':attribute non corrisponde al formato :format.',
    'different' => ':attribute e :other devono essere diversi.',
    'digits' => ':attribute deve essere :digits cifre.',
    'digits_between' => ':attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => ":attribute ha dimensioni dell'immagine non valide.",
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => ':attribute deve essere un indirizzo email valido.',
    'ends_with' => ':attribute deve terminare con uno dei seguenti: :values.',
    'exists' => ':attribute selezionato non è valido.',
    'file' => ':attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'numeric' => ':attribute deve essere maggiore di :value.',
        'file' => ':attribute deve essere maggiore di :valore kilobyte.',
        'string' => ':attribute deve essere maggiore di :value caratteri.',
        'array' => ':attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => ':attribute deve essere maggiore o uguale a :value.',
        'file' => ':attribute deve essere maggiore o uguale a :value kilobyte.',
        'string' => ':attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => ':attribute deve avere :value elementi o più.',
    ],
    'image' => "attribute deve essere un'immagine.",
    'in' => ':attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :altro.',
    'intero' => ':attribute deve essere un numero intero.',
    'ip' => ':attribute deve essere un indirizzo IP valido.',
    'ipv4' => ':attribute  deve essere un indirizzo IPv4 valido.',
    'ipv6' => ':attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':attribute  deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => ':attribute deve essere minore di :value.',
        'file' => ':attribute deve essere inferiore a :value kilobyte.',
        'string' => ':attribute deve essere inferiore a :value caratteri.',
        'array' => ':attribute deve avere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => ':attribute deve essere minore o uguale a :value.',
        'file' => ':attribute deve essere minore o uguale a :value kilobyte.',
        'string' => ':attribute deve essere minore o uguale a :value caratteri.',
        'array' => ':attribute non deve avere più di :value elementi.',
    ],
    'max' => [
        'numeric' => ':attribute non può essere maggiore di :max.',
        'file' => ':attribute non può essere maggiore di :max kilobyte.',
        'string' => ':attribute non può essere maggiore di :max caratteri.',
        'array' => ':attribute non può contenere più di :max elementi.',
    ],
    'mimes' => ':attribute deve essere un file di tipo: :values.',
    'mimetypes' => ':attribute deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => ':attribute deve essere almeno :min.',
        'file' => ':attribute deve essere almeno :min kilobyte.',
        'string' => ':attribute deve contenere almeno :min caratteri.',
        'array' => ':attribute deve avere almeno :min elementi.',
    ],
    'not_in' => ':attribute selezionato non è valido.',
    'not_regex' => 'Il formato :attribute non è valido.',
    'numeric' => ':attribute deve essere un numero.',
    'password' => 'La password non è corretta.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all' => 'Il campo :attributo è obbligatorio quando sono presenti :valori.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno dei :values è presente.',
    'same' => ':attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => ':attribute deve essere :dimensione.',
        'file' => ':attribute deve essere :size kilobyte.',
        'string' => ':attribute deve essere :size caratteri.',
        'array' => ':attribute deve contenere :size elementi.',
    ],
    'starts_with' => ":attribute deve iniziare con uno dei seguenti: :values.",
    'string' => ":attribute deve essere una stringa.",
    'timezone' => ":attribute deve essere una zona valida.",
    'unique' => ':attribute è già stato preso.',
    'uploaded' => 'Impossibile caricare :attribute .',
    'url' => 'Il formato :attribute non è valido.',
    'uuid' => ":attribute deve essere un UUID valido.",

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
