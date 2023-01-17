<?php





return 
[
    'accepted' => "Il :attribute  deve essere accettato.",
    'accepted_if' => "La :attribute  deve essere accettata quando :other  è :value .",
    'active_url' => ":attribute  non è un URL valido.",
    'after' => ":attribute  deve essere una data successiva a :date.",
    'after_or_equal' => ":attribute  deve essere una data successiva o uguale a :date.",
    'alpha' => "Il :attribute  deve contenere solo lettere.",
    'alpha_dash' => "Il :attribute  deve contenere solo lettere, numeri, trattini e underscore.",
    'alpha_num' => "Il :attribute  deve contenere solo lettere e numeri.",
    'array' => ":attribute  deve essere un array.",
    'ascii' => ":attribute  deve contenere solo caratteri alfanumerici e simboli a byte singolo.",
    'before' => ":attribute  deve essere una data precedente a :date.",
    'before_or_equal' => ":attribute  deve essere una data precedente o uguale a :date.",
    'between' => 
        [
            'array' => ":attribute  deve avere tra :min  e :max  elementi.",
            'file' => ":attribute  deve essere compreso tra :min  e :max  kilobyte.",
            'numeric' => ":attribute  deve essere compreso tra :min  e :max .",
            'string' => ":attribute  deve essere compreso tra :min  e :max  caratteri.",
        ],

    'boolean' => "Il campo :attribute  deve essere vero o falso.",
    'confirmed' => "La :attribute  conferma non corrisponde.",
    'current_password' => "La password non è corretta.",
    'date' => ":attribute  non è una data valida.",
    'date_equals' => ":attribute  deve essere una data uguale a :date.",
    'date_format' => ":attribute  non corrisponde al formato :format.",
    'decimal' => ":attribute  deve avere :dateecimal cifre decimali.",
    'declined' => "Il :attribute  deve essere rifiutato.",
    'declined_if' => ":attribute  deve essere declinato quando :other  è :value .",
    'different' => ":attribute  e :other  devono essere diversi.",
    'digits' => ":attribute  deve essere :cifre cifre.",
    'digits_between' => ":attribute  deve essere compreso tra :min  e :max  cifre.",
    'dimensions' => ":attribute  ha dimensioni dell'immagine non valide.",
    'distinct' => "Il campo :attribute  ha un valore duplicato.",
    'doesnt_end_with' => "Il :attribute  potrebbe non terminare con uno dei seguenti: :value s.",
    'doesnt_start_with' => ":attribute  potrebbe non iniziare con uno dei seguenti: :value s.",
    'email' => ":attribute  deve essere un indirizzo email valido.",
    'ends_with' => "Il :attribute  deve terminare con uno dei seguenti: :value s.",
    'enum' => "Il :attribute  selezionato non è valido.",
    'exists' => "Il :attribute  selezionato non è valido.",
    'file' => ":attribute  deve essere un file.",
    'filled' => "Il campo :attribute  deve avere un valore.",
    'gt' => 
        [
            'array' => ":attribute  deve contenere più di :value  elementi.",
            'file' => ":attribute  deve essere maggiore di :value  kilobyte.",
            'numeric' => ":attribute  deve essere maggiore di :value .",
            'string' => ":attribute  deve essere maggiore di :value  caratteri.",
        ],

    'gte' => 
        [
            'array' => ":attribute  deve avere :value  elementi o più.",
            'file' => ":attribute  deve essere maggiore o uguale a :value  kilobyte.",
            'numeric' => ":attribute  deve essere maggiore o uguale a :value .",
            'string' => ":attribute  deve essere maggiore o uguale a :value  caratteri.",
        ],

    'image' => ":attribute  deve essere un'immagine.",
    'in' => "Il :attribute  selezionato non è valido.",
    'in_array' => "Il campo :attribute  non esiste in :other .",
    'integer' => ":attribute  deve essere un numero intero.",
    'ip' => ":attribute  deve essere un indirizzo IP valido.",
    'ipv4' => ":attribute  deve essere un indirizzo IPv4 valido.",
    'ipv6' => ":attribute  deve essere un indirizzo IPv6 valido.",
    'json' => ":attribute  deve essere una stringa JSON valida.",
    'lowercase' => "La :attribute  deve essere minuscola.",
    'lt' => 
        [
            'array' => ":attribute  deve contenere meno di :value  elementi.",
            'file' => ":attribute  deve essere inferiore a :value  kilobyte.",
            'numeric' => ":attribute  deve essere minore di :value .",
            'string' => ":attribute  deve essere inferiore a :value  caratteri.",
        ],

    'lte' => 
        [
            'array' => ":attribute  non deve contenere più di :value  elementi.",
            'file' => ":attribute  deve essere minore o uguale a :value  kilobyte.",
            'numeric' => ":attribute  deve essere minore o uguale a :value .",
            'string' => ":attribute  deve essere minore o uguale a :value  caratteri.",
        ],

    'mac_address' => ":attribute  deve essere un indirizzo MAC valido.",
    'max' => 
        [
            'array' => ":attribute  non deve contenere più di :max  elementi.",
            'file' => ":attribute  non deve essere maggiore di :max  kilobyte.",
            'numeric' => ":attribute  non deve essere maggiore di :max .",
            'string' => ":attribute  non deve essere maggiore di :max  caratteri.",
        ],

    'max_digits' => ":attribute  non deve avere più di :max  cifre.",
    'mimes' => ":attribute  deve essere un file di tipo: :value s.",
    'mimetypes' => ":attribute  deve essere un file di tipo: :value s.",
    'min' => 
        [
            'array' => ":attribute  deve contenere almeno :min  elementi.",
            'file' => ":attribute  deve essere almeno :min  kilobyte.",
            'numeric' => "Il :attribute  deve essere almeno :min .",
            'string' => ":attribute  deve contenere almeno :min  caratteri.",
        ],

    'min_digits' => ":attribute  deve contenere almeno :min  cifre.",
    'multiple_of' => ":attribute  deve essere un multiplo di :value .",
    'not_in' => "Il :attribute  selezionato non è valido.",
    'not_regex' => "Il formato :attribute  non è valido.",
    'numeric' => ":attribute  deve essere un numero.",
    'password' => 
        [
            'letters' => "Il :attribute  deve contenere almeno una lettera.",
            'mixed' => "Il :attribute  deve contenere almeno una lettera maiuscola e una minuscola.",
            'numbers' => ":attribute  deve contenere almeno un numero.",
            'symbols' => ":attribute  deve contenere almeno un simbolo.",
            'uncompromised' => "Il dato :attribute  è apparso in una fuga di dati. Si prega di scegliere un altro :attribute .",
        ],

    'present' => "Il campo :attribute  deve essere presente.",
    'prohibited' => "Il campo :attribute  è proibito.",
    'prohibited_if' => "Il campo :attribute  è proibito quando :other  è :value .",
    'prohibited_unless' => "Il campo :attribute  è proibito a meno che :other  non sia in :value s.",
    'prohibits' => "Il campo :attribute  impedisce la presenza di :other .",
    'regex' => "Il formato :attribute  non è valido.",
    'required' => "Il campo :attribute  è obbligatorio.",
    'required_array_keys' => "Il campo :attribute  deve contenere voci per: :value s.",
    'required_if' => "Il campo :attribute  è obbligatorio quando :other  è :value .",
    'required_if_accepted' => "Il campo :attribute  è obbligatorio quando :è accettato.",
    'required_unless' => "Il campo :attribute  è obbligatorio a meno che :other  non sia in :value s.",
    'required_with' => "Il campo :attribute  è obbligatorio quando :value s è presente.",
    'required_with_all' => "Il campo :attribute  è obbligatorio quando sono presenti :value s.",
    'required_without' => "Il campo :attribute  è obbligatorio quando :value s non è presente.",
    'required_without_all' => "Il campo :attribute  è obbligatorio quando nessuno di :value s è presente.",
    'same' => ":attribute  e :other  devono corrispondere.",
    'size' => 
        [
            'array' => ":attribute  deve contenere elementi :secondsize .",
            'file' => ":attribute  deve essere :secondsize  kilobyte.",
            'numeric' => "La :attribute  deve essere :secondsize .",
            'string' => ":attribute  deve essere :secondsize  caratteri.",
        ],

    'starts_with' => "Il :attribute  deve iniziare con uno dei seguenti: :value s.",
    'string' => ":attribute  deve essere una stringa.",
    'timezone' => ":attribute  deve essere un fuso orario valido.",
    'unique' => "Il :attribute  è già stato preso.",
    'uploaded' => "Impossibile caricare :attribute .",
    'uppercase' => "La :attribute  deve essere maiuscola.",
    'url' => ":attribute  deve essere un URL valido.",
    'ulid' => ":attribute  deve essere un ULID valido.",
    'uuid' => ":attribute  deve essere un UUID valido.",
    'custom' => 
        [
            'attribute-name' => 
                [
                    'rule-name' => "messaggio personalizzato",
                ],

        ],

    'attributes' => 
        [
        ],

];