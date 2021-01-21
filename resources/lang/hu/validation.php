<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted'                       => ':attribute elfogadása kötelező.',
    'active_url'                     => ':attribute nem érvényes webcím.',
    'after'                          => 'A(z) :attribute dátumának később kell lennie, mint :date.',
    'after_or_equal'                 => 'A(z) :attribute dátumának meg kell egyeznie vagy későbbinek kell lennie, mint :date',
    'alpha'                          => 'A(z) :attribute csak betűket tartalmazhat.',
    'alpha_dash'                     => 'A(z) :attribute csak betűket, számokat és  kötőjelet tartalmazhat.',
    'alpha_num'                      => 'A(z) :attribute csak betűket és számokat tartalmazhat.',
    'latin'                          => 'A(z) :attribute kizárólag a latin ábécé betűit tartalmazhatja.',
    'latin_dash_space'               => 'A(z) :attribute csak ISO alapszintű latin ábécé betűket, számokat, kötőjeleket, kötőjeleket és szóközöket tartalmazhat.',
    'array'                          => 'A(z) :attribute -nak tömbnek kell lennie.',
    'before'                         => 'A(z) :attribute dátumának korábban kell lennie, mint :date.',
    'before_or_equal'                => 'A(z) :attribute dátumának meg kell egyeznie vagy korábbinak kell lennie, mint :date',
    'between'                        => [
        'numeric' => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max.',
        'file'    => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max kilóbájt.',
        'string'  => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max karakter.',
        'array'   => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max darab.',
    ],
    'boolean'                        => 'A(z) :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed'                      => 'A(z) :attribute megerősítése nem egyezik.',
    'date'                           => 'A(z) :attribute nem érvényes dátum.',
    'date_equals'                    => 'A(z) :attribute dátumnak kell lennie, amely egyenlő :date.',
    'date_format'                    => 'A(z) :attribute formátuma nem egyezik ezzel: :format.',
    'different'                      => 'A(z) :attribute -nak és a(z) :other -nak különböznie kell.',
    'digits'                         => 'A(z) :attribute -nak :digits számjegyből kell állnia.',
    'digits_between'                 => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max számjegy.',
    'dimensions'                     => 'A(z) :attribute -nak érvénytelen képméretei vannak.',
    'distinct'                       => 'A(z) :attribute -nak duplikált értéke van.',
    'email'                          => 'A(z) :attribute -nak érvényes email címnek kell lennie.',
    'ends_with'                      => 'A(z) :attribute -nak a következők egyikével kell végződnie: :ends_with.',
    'exists'                         => 'A kiválasztott :attribute érvénytelen.',
    'file'                           => 'A(z) :attribute -nak fájlnak kell lennie.',
    'filled'                         => 'A(z) :attribute mező kötelező.',
    'gt'                             => [
        'numeric' => 'A(z) :attribute nagyobb kell, hogy legyen mint :gt',
        'file'    => 'A(z) :attribute nagyobb kell, hogy legyen :gt kilobyte-nál.',
        'string'  => 'A(z) :attribute hosszabb kell, hogy legyen :gt karakternél.',
        'array'   => 'A(z) :attribute listának több mint  :gt tétellel kell rendelkeznie.',
    ],
    'gte'                            => [
        'numeric' => 'A(z) :attribute meg kell, hogy egyezzen vagy nagyobb kell, hogy legyen mint :gte',
        'file'    => 'A(z) :attribute mérete meg kell, hogy egyezzen vagy nagyobb kell, hogy legyen :gte kilobyte-nál.',
        'string'  => 'A(z) :attribute meg kell, hogy egyezzen vagy hosszabb kell, hogy legyen :gte karakternél.',
        'array'   => 'A(z) :attribute listának :gte vagy több tétellel kell rendelkeznie.',
    ],
    'image'                          => 'A(z) :attribute -nak képnek kell lennie.',
    'in'                             => 'A kiválasztott :attribute érvénytelen.',
    'in_array'                       => 'A(z) :attribute mező nem létezik az :other -ben.',
    'integer'                        => 'A(z) :attribute -nak egész számnak kell lennie. (pl.: 123456)',
    'ip'                             => 'A(z) :attribute -nak IP címnek kell lennie.',
    'ipv4'                           => 'A(z) :attribute egy érvényes IPv4 cím kell, hogy legyen.',
    'ipv6'                           => 'A(z) :attribute egy érvényes IPv6 cím kell, hogy legyen.',
    'json'                           => 'A(z) :attribute -nak JSON stringnek kell lennie.',
    'lt'                             => [
        'numeric' => 'A(z) :attribute kisebb kell, hogy legyen mint :lt',
        'file'    => 'A(z) :attribute kisebb kell, hogy legyen :lt kilobyte-nál.',
        'string'  => 'A(z) :attribute rövidebb kell, hogy legyen :lt karakternél.',
        'array'   => 'A(z) :attribute listának kevesebb mint  :lt tétellel kell rendelkeznie.',
    ],
    'lte'                            => [
        'numeric' => 'A(z) :attribute meg kell, hogy egyezzen vagy kisebb kell, hogy legyen mint :lte',
        'file'    => 'A(z) :attribute mérete meg kell, hogy egyezzen vagy kisebb kell, hogy legyen :lte kilobyte-nál.',
        'string'  => 'A(z) :attribute meg kell, hogy egyezzen vagy rövidebb kell, hogy legyen :lte karakternél.',
        'array'   => 'A(z) :attribute listának nem lehet több mint  :lte tétele.',
    ],
    'max'                            => [
        'numeric' => 'A(z) :attribute nem lehet nagyobb, mint :max.',
        'file'    => 'A(z) :attribute nem lehet nagyobb, mint :max kilóbájt.',
        'string'  => 'A(z) :attribute nem lehet nagyobb, mint :max karakter.',
        'array'   => 'A(z) :attribute nem lehet nagyobb, mint :max. elem.',
    ],
    'mimes'                          => 'A(z) :attribute -nak az alábbi fájltípusok jók: :mimes.',
    'mimetypes'                      => 'A(z) :attribute -nak az alábbi fájltípusok jók: :mimetypes.',
    'min'                            => [
        'numeric' => 'A(z) :attribute -nak legalább ennyinek kell lennie: :min.',
        'file'    => 'A(z) :attribute -nak legalább ennyinek kell lennie: :min kilóbájt.',
        'string'  => 'A(z) :attribute -nak legalább ennyinek kell lennie: :min karakter.',
        'array'   => 'A(z) :attribute -nak legalább ennyinek kell lennie: :min elem.',
    ],
    'not_in'                         => 'A kiválasztott :attribute érvénytelen.',
    'not_regex'                      => 'A(z) :attribute formátuma érvénytelen.',
    'numeric'                        => 'A(z) :attribute -nak számnak kell lennie.',
    'password'                       => 'Helytelen jelszó.',
    'present'                        => 'A(z) :attribute mezőre szükség van.',
    'regex'                          => 'A(z) :attribute formátuma érvénytelen.',
    'required'                       => 'A(z) :attribute mező kötelező.',
    'required_if'                    => 'A(z) :attribute mező kötelező, amikor a(z) :other értéke :value.',
    'required_unless'                => 'A(z) :attribute -nak mező kötelező, kivéve ha a(z) :other értéke :values.',
    'required_with'                  => 'A(z) :attribute -nak mező kötelező, amikor :values létezik.',
    'required_with_all'              => 'A(z) :attribute -nak mező kötelező, amikor :values létezik.',
    'required_without'               => 'A(z) :attribute -nak mező kötelező, amikor :values nem létezik.',
    'required_without_all'           => 'A(z) :attribute -nak mező kötelező, amikor egyik :values sem létezik.',
    'same'                           => 'A(z) :attribute és a(z) :other egyezniük kell.',
    'size'                           => [
        'numeric' => 'A(z) :attribute -nak ekkorának kell lennie: :size.',
        'file'    => 'A(z) :attribute -nak :size kilóbájtnak kell lennie.',
        'string'  => 'A(z) :attribute -nak :size karakterből kell állnia.',
        'array'   => 'A(z) :attribute -nak :size eleme lehet.',
    ],
    'starts_with'                    => 'A(z) :attribute-nak :values valamelyikével kell kezdődnie',
    'string'                         => 'A(z) :attribute -nak szövegnek kell lennie.',
    'timezone'                       => 'A(z) :attribute -nak érvényes zónának kell lennie.',
    'unique'                         => 'A(z) :attribute már foglalt.',
    'uploaded'                       => 'A(z) :attribute feltöltése nem sikerült.',
    'url'                            => 'A(z) :attribute formátuma érvénytelen.',
    'uuid'                           => 'A(z) :attribute-nak érvényes UUID-nek kell lennie',
    'reserved_word'                  => 'A(z) :attribute fentartott (tiltott) szavakat tartalmaz',
    'dont_allow_first_letter_number' => 'A(z) \":input\" mező értékének első karaktere nem lehet szám.',
    'exceeds_maximum_number'         => 'A(z) :attribute meghaladja a modell maximális hosszát',
    'db_column'                      => 'A(z) :attribute csak ISO alapszintű latin ábécé betűket, számokat, kötőjelet tartalmazhat, és nem kezdődhet számmal.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom'                         => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'afa' => [
            'regex' => 'A(z) :attribute -nak számnak kell lennie. (formátum: 123456789,12)',
        ],
        'brutto' => [
            'regex' => 'A(z) :attribute -nak számnak kell lennie. (formátum: 123456789,12)',
        ],
        'netto_eladasi_ar' => [
            'regex' => 'A(z) :attribute -nak számnak kell lennie. (formátum: 123456789,12)',
        ],
        'viszonteladoi_jutalek_osszeg' => [
            'regex' => 'A(z) :attribute -nak számnak kell lennie. (formátum: 123456789,12)',
        ],
        'kozvetitoi_jutalek_osszeg' => [
            'regex' => 'A(z) :attribute -nak számnak kell lennie. (formátum: 123456789,12)',
        ],

    ],
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes'                     => [
        'name'     => 'Név',
        'password' => 'Jelszó',

        'id_nev' => 'Csomag ID',
        'csomag_neve' => 'Csomag neve',
        'netto_eladasi_ar' => 'Nettó ár',
        'afa' => 'Áfa',
        'brutto' => 'Bruttó',
        'jotallas' => 'Jótállás',
        'partner_vevo_id' => 'Partner / Vevő',

        'ertekesito_id' => 'Értékesítő',
        'partner_id' => 'Partner',
        'jutalek' => 'Jutalék mértéke (%)',
        'aktiv_idoszak_kezdete' => 'Aktív időszak kezdete',
        'aktiv_idoszak_vege' => 'Aktív időszak vége',

        'felhasznalo_id' => 'Értékesítő neve',

        'partner_neve_id' => 'Partner neve',
        'termek_neve_id' => 'Termék neve',
        'csomag_neve_id' => 'Csomag neve',
        'viszonteladoi_jutalek_osszeg' => 'Viszonteladói jutalék (összeg)',
        'viszonteladoi_jutalek_szazalek' => 'Viszonteladói jutalék (%)',
        'kozvetitoi_jutalek_osszeg' => 'Közvetítői jutalék (összeg)',
        'kozvetitoi_jutalek_szazalek' => 'Közvetítői jutalék (%)',

        'status' => 'Státusz',

        'partner_neve' => 'Partner neve',
        'partner_cegneve' => 'Partner cégneve',
        'adoszam' => 'Adószám',
        'bankszamlaszam' => 'Bankszámlaszám',
        'fizetesi_hatarido' => 'Fizetési határidő',
        'szamlazasi_orszag' => 'Számlázási Ország',
        'szamlazasi_kozterulet' => 'Számlázási Közterület',
        'szamlazasi_hazszam' => 'Számlázási Házszám',
        'szamlazasi_telepules' => 'Számlázási Település',
        'szamlazasi_iranyitoszam' => 'Számlázási Irányítószám',
        'szallitasi_kozterulet' => 'Szállítási Közterület',
        'szallitasi_hazszam' => 'Szállítási Házszám',
        'szallitasi_telepules' => 'Szállítási Település',
        'szallitasi_iranyitoszam' => 'Szállítási Irányítószám',
        'kontakt_szemely_nev' => 'Kontakt személy vezetéknév és keresztnév',
        'kontakt_szemely_telefonszam' => 'Kontakt személy telefonszám',
        'kontakt_szemely_email' => 'Kontakt személy email',
        'kontakt_szemely_beosztas' => 'Beosztás',
        'megjegyzes' => 'Megjegyzés',
        'vevo' => 'Vevő',
        'vevo_tipusa_id' => 'Vevő típusa',
        'crm' => 'CRM',
        'kedvezmeny' => 'Kedvezmény',
        'partnertipusok' => 'Partnertípus',
        'telefonszam' => 'Telefonszám',
        
        'tipus' => 'Típus',
        'title' => 'Név',
        'roles' => 'Felhasználói csoportok',
        'email' => 'Email',

        'raktar_neve' => 'Raktár neve',
        'import_raktar' => 'Import raktár',

        'termek_id' => 'Termék',
        'termek' => 'Termék',
        'termek_neve' => 'Termék neve',
        'angol_megnevezes' => 'Angol megnevezés',
        'partner_neve' => 'Gyártó/forgalmazó',
        'cikkszam' => 'Cikkszám',

        'vonalkod' => 'Vonalkód',
    ],
];
