<?php

declare(strict_types=1);

return [
    [
        0,
    ],
    [
        2,
        [
            [1],
            [1],
            [1],
        ],
        [
            ['Y'],
            ['Y'],
            ['N'],
        ],
        '=Y',
        [
            ['H'],
            ['H'],
            ['H'],
        ],
        '=H',
    ],
    [
        1,
        [
            [1],
            [1],
            [1],
        ],
        [
            ['A'],
            ['B'],
            ['C'],
        ],
        '=B',
        [
            ['C'],
            ['B'],
            ['A'],
        ],
        '=B',
    ],
    [
        348000,
        [223000, 125000, 456000, 322000, 340000, 198000, 310000, 250000, 460000, 261000, 389000, 305000],
        [1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4],
        1,
        ['North', 'North', 'South', 'North', 'North', 'South', 'North', 'North', 'South', 'North', 'North', 'South'],
        'North',
    ],
    [
        571000,
        [223000, 125000, 456000, 322000, 340000, 198000, 310000, 250000, 460000, 261000, 389000, 305000],
        [1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4],
        '>2',
        ['Jeff', 'Chris', 'Carol', 'Jeff', 'Chris', 'Carol', 'Jeff', 'Chris', 'Carol', 'Jeff', 'Chris', 'Carol'],
        'Jeff',
    ],
];
