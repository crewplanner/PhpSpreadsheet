<?php

declare(strict_types=1);

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [
        '93502.0563677416700-65794.6618992949199j',
        '12.34+5.67j',
    ],
    [
        ExcelError::NAN(),
        'Invalid Complex Number',
    ],
    [
        '-13.2530202358612674+9.91837391474661948i',
        '3.5+2.5i',
    ],
    [
        '8.93801966862639899+13.9455510970032033i',
        '3.5+i',
    ],
    [
        '16.5426272876349976',
        '3.5',
    ],
    [
        '8.93801966862639899-13.9455510970032033i',
        '3.5-i',
    ],
    [
        '-13.2530202358612674-9.91837391474661948i',
        '3.5-2.5i',
    ],
    [
        '-0.941504933270867276+0.923490776043173241i',
        '1+2.5i',
    ],
    [
        '0.634963914784736108+1.29845758141597729i',
        '1+i',
    ],
    [
        '1.17520119364380146',
        '1',
    ],
    [
        '0.634963914784736108-1.29845758141597729i',
        '1-i',
    ],
    [
        '-0.941504933270867276-0.923490776043173241i',
        '1-2.5i',
    ],
    [
        '0.598472144103956494i',
        '2.5i',
    ],
    [
        '0.841470984807896507i',
        'i',
    ],
    [
        '0.0',
        '0',
    ],
    [
        '-0.841470984807896507i',
        '-i',
    ],
    [
        '-0.5984721441039565i',
        '-2.5i',
    ],
    [
        '0.941504933270867+0.923490776043173i',
        '-1+2.5i',
    ],
    [
        '-0.63496391478473611+1.29845758141597729i',
        '-1+i',
    ],
    [
        '-1.17520119364380146',
        '-1',
    ],
    [
        '-0.63496391478473611-1.29845758141597729i',
        '-1-i',
    ],
    [
        '0.941504933270867-0.923490776043173i',
        '-1-2.5i',
    ],
    [
        '13.25302023586127+9.91837391474662i',
        '-3.5+2.5i',
    ],
    [
        '-8.9380196686264+13.9455510970032i',
        '-3.5+i',
    ],
    [
        '-16.5426272876349976',
        '-3.5',
    ],
    [
        '-8.9380196686264-13.9455510970032i',
        '-3.5-i',
    ],
    [
        '13.25302023586127-9.91837391474662i',
        '-3.5-2.5i',
    ],
    [
        '10.0178749274099019',
        '3',
    ],
];
