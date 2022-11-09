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
        ['A' => 10],
        ['B' => 12],
        ['C' => 13],
        ['D' => 14],
        ['E' => 15],
        ['F' => 16],
        ['G' => 17],
        ['H' => 18],
        ['I' => 19],
        ['J' => 20],
        ['K' => 21],
        ['L' => 23],
        ['M' => 24],
        ['N' => 25],
        ['O' => 26],
        ['P' => 27],
        ['Q' => 28],
        ['R' => 29],
        ['S' => 30],
        ['T' => 31],
        ['U' => 32],
        ['V' => 34],
        ['W' => 35],
        ['X' => 36],
        ['Y' => 37],
        ['Z' => 38],
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
     * Route Configuration
     */
    'prefix' => 'scs',
    'middleware' => ['web'],
];
