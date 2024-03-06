<?php

declare(strict_types=1);

return [
    [
        true,
        null,
    ],
    [
        true,
        -1,
    ],
    [
        true,
        0,
    ],
    [
        true,
        9,
    ],
    [
        true,
        1.5,
    ],
    [
        false,
        '',
    ],
    [
        false,
        '-1',
    ],
    [
        false,
        '2',
    ],
    [
        false,
        '-1.5',
    ],
    [
        false,
        'ABC',
    ],
    [
        true,
        '#VALUE!',
    ],
    [
        true,
        '#N/A',
    ],
    [
        false,
        'TRUE',
    ],
    [
        true,
        true,
    ],
    [
        true,
        false,
    ],
];
