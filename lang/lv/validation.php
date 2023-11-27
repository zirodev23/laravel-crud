<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute ir jābūt pieņemtam.',
    'accepted_if'          => ':Attribute ir jāpieņem, ja :other ir :value.',
    'active_url'           => ':Attribute ir ar nederīgu saiti.',
    'after'                => ':Attribute ir jābūt ar datumu pēc :date.',
    'after_or_equal'       => ':Attribute ir jābūt ar datumu pēc vai vienādu ar :date.',
    'alpha'                => ':Attribute var saturēt tikai burtus.',
    'alpha_dash'           => ':Attribute var saturēt tikai burtus, numurus un atstarpes.',
    'alpha_num'            => ':Attribute var tikai saturēt burtus un numurus.',
    'array'                => ':Attribute ir jābūt sakārtotam.',
    'ascii'                => ':Attribute drīkst saturēt tikai viena baita burtciparu rakstzīmes un simbolus.',
    'before'               => ':Attribute ir jābūt ar datumu pirms :date.',
    'before_or_equal'      => ':Attribute ir jābūt ar datumu pirms vai vienādu ar :date.',
    'between'              => [
        'array'   => ':Attribute jābūt no :min līdz :max vienībām.',
        'file'    => ':Attribute jābūt starp :min un :max kilobaitiem.',
        'numeric' => ':Attribute jābūt starp :min un :max.',
        'string'  => ':Attribute jābūt no :min līdz :max zīmēm.',
    ],
    'boolean'              => ':Attribute lauciņam jābūt patiesam vai nepatiesam.',
    'can'                  => 'Laukā :attribute ir neatļauta vērtība.',
    'confirmed'            => ':Attribute apstiprinājums neatbilst.',
    'current_password'     => 'Parole ir nepareiza.',
    'date'                 => ':Attribute nav derīgs.',
    'date_equals'          => ':Attribute datumam jāsakrīt ar :date.',
    'date_format'          => ':Attribute neatbilst formātam :format.',
    'decimal'              => ':Attribute ir jābūt :decimal cipariem aiz komata.',
    'declined'             => ':Attribute ir jānoraida.',
    'declined_if'          => ':Attribute ir jānoraida, ja :other ir :value.',
    'different'            => ':Attribute un :other ir jābūt atšķirīgiem.',
    'digits'               => ':Attribute ir jābūt :digits cipariem.',
    'digits_between'       => ':Attribute garumam ir jābūt starp :min un :max cipariem.',
    'dimensions'           => ':Attribute ir nederīgs attēla izmērs.',
    'distinct'             => ':Attribute laukam ir dublikāts.',
    'doesnt_end_with'      => ':Attribute nedrīkst beigties ar kādu no šiem: :values.',
    'doesnt_start_with'    => ':Attribute nedrīkst sākties ar kādu no šiem: :values.',
    'email'                => ':Attribute ir jābūt derīgai e-pasta adresei.',
    'ends_with'            => ':Attribute jābeidzas ar vienu no šiem: :values.',
    'enum'                 => 'Atlasītie :attribute nav derīgi.',
    'exists'               => 'Izvēlētais :attribute ir nederīgs.',
    'extensions'           => 'Laukam :attribute ir jābūt vienam no šiem paplašinājumiem: :values.',
    'file'                 => ':Attribute jābūt failam.',
    'filled'               => ':Attribute lauks ir obligāts.',
    'gt'                   => [
        'array'   => ':Attribute jābūt vairāk nekā :value vienībām.',
        'file'    => ':Attribute jābūt lielākam par :value kilobaitiem.',
        'numeric' => ':Attribute jābūt lielākam par :value.',
        'string'  => ':Attribute jāpārsniedz :value rakstzīmes.',
    ],
    'gte'                  => [
        'array'   => ':Attribute jābūt :value vai vairāk vienībām.',
        'file'    => ':Attribute jābūt lielākam vai vienādam ar :value kilobaitiem.',
        'numeric' => ':Attribute jābūt lielākam vai vienādam ar :value.',
        'string'  => ':Attribute garumam jābūt lielākam vai vienādam ar :value rakstzīmēm.',
    ],
    'hex_color'            => 'Laukam :attribute ir jābūt derīgai heksadecimālajai krāsai.',
    'image'                => ':Attribute jābūt attēlam.',
    'in'                   => 'Izvēlētais :attribute ir nederīgs.',
    'in_array'             => ':Other neeksistē lauks :attribute.',
    'integer'              => ':Attribute ir jābūt skaitlim.',
    'ip'                   => ':Attribute jābūt derīgai IP adresei.',
    'ipv4'                 => ':Attribute jābūt derīgai IPv4 adresei.',
    'ipv6'                 => ':Attribute jābūt derīgai IPv6 adresei.',
    'json'                 => ':Attribute jābūt derīgai JSON virknei.',
    'lowercase'            => ':Attribute ir jābūt mazajiem burtiem.',
    'lt'                   => [
        'array'   => ':Attribute jābūt mazāk nekā :value vienībām.',
        'file'    => ':Attribute nedrīkst pārsniegt :value kilobaitus.',
        'numeric' => ':Attribute jābūt mazākam nekā :value.',
        'string'  => ':Attribute nedrīkst pārsniegt :value rakstzīmes.',
    ],
    'lte'                  => [
        'array'   => ':Attribute nedrīkst būt vairāk par :value vienībām.',
        'file'    => ':Attribute nedrīkst pārsniegt :value kilobaitus.',
        'numeric' => ':Attribute jābūt mazākam vai vienādam ar :value.',
        'string'  => ':Attribute nedrīkst pārsniegt :value rakstzīmes.',
    ],
    'mac_address'          => ':Attribute ir jābūt derīgai MAC adresei.',
    'max'                  => [
        'array'   => ':Attribute nedrīkst pārsniegt :max vienības.',
        'file'    => ':Attribute nedrīkst pārsniegt :max kilobaitus.',
        'numeric' => ':Attribute nedrīkst pārsniegt :max.',
        'string'  => ':Attribute nedrīkst pārsniegt :max rakstzīmes.',
    ],
    'max_digits'           => ':Attribute nedrīkst būt vairāk par :max cipariem.',
    'mimes'                => ':Attribute jābūt faila tipam: :values',
    'mimetypes'            => ':Attribute jābūt faila tipam: :values.',
    'min'                  => [
        'array'   => ':Attribute jāsatur vismaz :min vienības.',
        'file'    => ':Attribute jābūt vismaz :min kilobaitiem.',
        'numeric' => ':Attribute jābūt vismaz :min.',
        'string'  => ':Attribute jābūt vismaz :min rakstzīmēm.',
    ],
    'min_digits'           => ':Attribute ir jābūt vismaz :min cipariem.',
    'missing'              => 'Jātrūkst laukam :attribute.',
    'missing_if'           => 'Laukam :attribute ir jābūt pazudušiem, ja :other ir :value.',
    'missing_unless'       => 'Laukam :attribute ir jābūt pazudušiem, ja vien :other nav :value.',
    'missing_with'         => 'Laukam :attribute ir jābūt pazudušiem, ja ir :values.',
    'missing_with_all'     => 'Laukam :attribute ir jābūt pazudušiem, ja ir :values.',
    'multiple_of'          => ':Attribute jābūt :value daudzkārtnim.',
    'not_in'               => 'izvēlētais :attribute ir nederīgs.',
    'not_regex'            => ':Attribute formāts ir nederīgs.',
    'numeric'              => ':Attribute jābūt skaitlim.',
    'password'             => [
        'letters'       => ':Attribute ir jāsatur vismaz viens burts.',
        'mixed'         => ':Attribute ir jāsatur vismaz viens lielais un viens mazais burts.',
        'numbers'       => ':Attribute ir jāsatur vismaz viens skaitlis.',
        'symbols'       => ':Attribute ir jāsatur vismaz viens simbols.',
        'uncompromised' => 'Dotais :attribute ir parādījies datu noplūdē. Lūdzu, izvēlieties citu :attribute.',
    ],
    'present'              => ':Attribute lauks ir obligāts.',
    'present_if'           => 'Laukam :attribute ir jābūt redzamam, ja :other ir :value.',
    'present_unless'       => 'Laukam :attribute ir jābūt redzamam, ja vien :other nav :value.',
    'present_with'         => 'Laukam :attribute ir jābūt redzamam, ja ir :values.',
    'present_with_all'     => 'Laukam :attribute ir jābūt redzamam, ja ir :values.',
    'prohibited'           => ':Attribute lauks ir aizliegts.',
    'prohibited_if'        => ':Attribute lauks ir aizliegts, ja :other ir :value.',
    'prohibited_unless'    => ':Attribute lauks ir aizliegts, ja vien :other nav :values.',
    'prohibits'            => ':Attribute lauks aizliedz :other atrasties.',
    'regex'                => ':Attribute formāts ir nederīgs.',
    'required'             => ':Attribute lauks ir obligāts.',
    'required_array_keys'  => 'Laukā :attribute jābūt ierakstiem: :values.',
    'required_if'          => ':Attribute lauks ir obligāts, ja :other ir :values.',
    'required_if_accepted' => 'Lauks :attribute ir nepieciešams, ja tiek pieņemts :other.',
    'required_unless'      => ':Attribute lauks ir obligāts, ja vien :other nav :values.',
    'required_with'        => ':Attribute lauks ir obligāts, kad kāds no :values ir pieejams.',
    'required_with_all'    => ':Attribute lauks ir obligāts, kad viss no :values ir pieejams.',
    'required_without'     => ':Attribute lauks ir obligāts, kad kāds no :values nav pieejams.',
    'required_without_all' => ':Attribute lauks ir obligāts, kad neviens no :values nav pieejams.',
    'same'                 => ':Attribute un :other ir jāsakrīt.',
    'size'                 => [
        'array'   => ':Attribute jāsatur :size vienības.',
        'file'    => ':Attribute jābūt :size kilobaiti.',
        'numeric' => ':Attribute jābūt :size.',
        'string'  => ':Attribute jābūt :size rakstzīmēm.',
    ],
    'starts_with'          => ':Attribute jāsākas ar kādu no šiem: :values',
    'string'               => ':Attribute jābūt virknē.',
    'timezone'             => ':Attribute jābūt derīgai laika zonai.',
    'ulid'                 => ':Attribute ir jābūt derīgam ULID.',
    'unique'               => ':Attribute jau ir aizņemts.',
    'uploaded'             => ':Attribute netika augšupielādēts.',
    'uppercase'            => ':Attribute ir jābūt lielajiem burtiem.',
    'url'                  => ':Attribute formāts ir nederīgs.',
    'uuid'                 => ':Attribute jābūt derīgam UUID.',
    'attributes'           => [
        'address'                  => 'adrese',
        'age'                      => 'vecums',
        'amount'                   => 'summa',
        'area'                     => 'apgabalā',
        'available'                => 'pieejams',
        'birthday'                 => 'dzimšanas diena',
        'body'                     => 'ķermenis',
        'city'                     => 'pilsēta',
        'content'                  => 'saturu',
        'country'                  => 'valsts',
        'created_at'               => 'izveidots plkst',
        'creator'                  => 'radītājs',
        'current_password'         => 'pašreizējā parole',
        'date'                     => 'datums',
        'date_of_birth'            => 'dzimšanas datums',
        'day'                      => 'diena',
        'deleted_at'               => 'dzēsts plkst',
        'description'              => 'apraksts',
        'district'                 => 'apgabals',
        'duration'                 => 'ilgums',
        'email'                    => 'e-pasts',
        'excerpt'                  => 'izvilkums',
        'filter'                   => 'filtru',
        'first_name'               => 'vārds',
        'gender'                   => 'dzimums',
        'group'                    => 'grupai',
        'hour'                     => 'stunda',
        'image'                    => 'attēlu',
        'last_name'                => 'uzvārds',
        'lesson'                   => 'nodarbība',
        'line_address_1'           => 'līnijas adrese 1',
        'line_address_2'           => 'līnijas adrese 2',
        'message'                  => 'ziņa',
        'middle_name'              => 'otrais vārds',
        'minute'                   => 'minūte',
        'mobile'                   => 'mobilais',
        'month'                    => 'mēnesis',
        'name'                     => 'nosaukums',
        'national_code'            => 'valsts kods',
        'number'                   => 'numuru',
        'password'                 => 'parole',
        'password_confirmation'    => 'paroles apstiprināšana',
        'phone'                    => 'tālrunis',
        'photo'                    => 'foto',
        'postal_code'              => 'Pasta indekss',
        'price'                    => 'cena',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha atbildes lauks',
        'remember'                 => 'atceries',
        'restored_at'              => 'atjaunota plkst',
        'result_text_under_image'  => 'rezultāta teksts zem attēla',
        'role'                     => 'lomu',
        'second'                   => 'otrais',
        'sex'                      => 'sekss',
        'short_text'               => 'īss teksts',
        'size'                     => 'Izmērs',
        'state'                    => 'Valsts',
        'street'                   => 'iela',
        'student'                  => 'students',
        'subject'                  => 'priekšmets',
        'teacher'                  => 'skolotājs',
        'terms'                    => 'noteikumiem',
        'test_description'         => 'testa apraksts',
        'test_locale'              => 'pārbaudes lokalizācija',
        'test_name'                => 'testa nosaukums',
        'text'                     => 'tekstu',
        'time'                     => 'laiks',
        'title'                    => 'virsraksts',
        'updated_at'               => 'atjaunināts plkst',
        'username'                 => 'lietotājvārds',
        'year'                     => 'gadā',

        'qty'                      => 'daudzums'
    ],
];