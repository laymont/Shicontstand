<?php

// config for Laymont/Shicontstand
return [
    /**
     * The equipment category identifier consists of one of the following capital letters of the Latin alphabet
     */
    'equipment_category_identifier' => [
        ['u' => 'for all freight containers'],
        ['J' => 'for detachable freight container-related equipment'],
        ['Z' => 'for trailers and chassis'],
    ],

    /**
     * An equivalent numerical value is assigned to each letter of the alphabet,
     * beginning with 10 for the letter A (11 and multiples thereof are omitted)
     */
    'calculation_step_one' => [
        ['character' => 'A', 'value' => 10],
        ['character' => 'B', 'value' => 12],
        ['character' => 'C', 'value' => 13],
        ['character' => 'D', 'value' => 14],
        ['character' => 'E', 'value' => 15],
        ['character' => 'F', 'value' => 16],
        ['character' => 'G', 'value' => 17],
        ['character' => 'H', 'value' => 18],
        ['character' => 'I', 'value' => 19],
        ['character' => 'J', 'value' => 20],
        ['character' => 'K', 'value' => 21],
        ['character' => 'L', 'value' => 23],
        ['character' => 'M', 'value' => 24],
        ['character' => 'N', 'value' => 25],
        ['character' => 'O', 'value' => 26],
        ['character' => 'P', 'value' => 27],
        ['character' => 'Q', 'value' => 28],
        ['character' => 'R', 'value' => 29],
        ['character' => 'S', 'value' => 30],
        ['character' => 'T', 'value' => 31],
        ['character' => 'U', 'value' => 32],
        ['character' => 'V', 'value' => 34],
        ['character' => 'W', 'value' => 35],
        ['character' => 'X', 'value' => 36],
        ['character' => 'Y', 'value' => 37],
        ['character' => 'Z', 'value' => 38],
    ],

    /**
     * Each of the numbers calculated in step 1 is multiplied by 2position, where position is the exponent to base 2.
     * Position starts at 0, from left to right.
     * The following table shows the multiplication factors
     */
    'calculation_step_two' => [1, 2, 4, 8, 16, 32, 64, 128, 256, 512],

    /**
     * table names
     */
    'tables' => [
        'type_groups' => 'scs_type_groups',
        'size_types' => 'scs_size_types',
        'length_codes' => 'scs_length_codes',
        'size_codes' => 'scs_size_codes',
        'type_codes' => 'scs_type_codes',
    ],

    /**
     * Container Model name
     */
    'model' => [
        'name' => 'containers',
        'property' => 'number',
    ],

    /**
     * Route Configuration
     */
    'prefix' => 'scs',
    'middleware' => ['web'],
];
