<?php

return [

    /*
    | Single source of truth for public site details.
    | Update these values with your official organisation information.
    */

    'name' => 'Great Africa',

    'full_name' => 'Generational Resilience Environment Agriculture Transdevelopment Africa',

    'tagline' => 'Climate resilience. Sustainable agriculture. Community power.',

    'email' => 'info@thegreatafrica.org', // TODO: replace with official email
    'phone' => '+254 700 000 000',  // TODO: replace with official phone
    'phone_href' => '+254700000000',
    'location' => 'Nairobi, Kenya',

    'social' => [
        // TODO: replace "#" with real profile URLs
        'facebook' => '#',
        'instagram' => '#',
        'x' => '#',
        'youtube' => '#',
    ],

    'donations' => [
        'mpesa' => [
            'provider' => 'Safaricom M-Pesa',
            'paybill' => 'XXXXXX',      // TODO
            'account' => 'GREAT AFRICA',
            'reference' => 'DONATION',
        ],
        'bank' => [
            'name' => 'XXXX Bank',      // TODO
            'branch' => 'Nairobi',
            'account_name' => 'GREAT AFRICA',
            'account_number' => 'XXXXXX', // TODO
            'swift' => 'XXXXXX',         // TODO
        ],
        'card' => [
            'note' => 'Card / PayPal giving link — add your online donation URL in config/site.php.',
            'url' => null, // TODO: add online donation link
        ],
    ],

    'tiers' => [
        ['amount' => 'KES 2,000',  'impact' => 'Training materials for one farmer'],
        ['amount' => 'KES 10,000', 'impact' => 'Support for a community conservation activity'],
        ['amount' => 'KES 25,000', 'impact' => 'Facilitation of a community learning program'],
    ],

    'stats' => [
        ['value' => '10,000+', 'label' => 'Farmers reached'],
        ['value' => '25+',     'label' => 'Communities served'],
        ['value' => '120+',    'label' => 'Youth groups engaged'],
        ['value' => '50+',     'label' => 'Climate projects'],
    ],

];
