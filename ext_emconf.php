<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Translate',
    'description' => 'Backend Module for creating and editing of language files (locallang.xlf).',
    'category' => 'module',
    'version' => '2.9.0',
    'state' => 'stable',
    'author' => 'Raphael Graf',
    'author_email' => 'r@undefined.ch',
    'author_company' => 'undefined',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
