<?php

return [
    'baseUrl' => env('APP_URL', 'http://localhost:8000'),
    'production' => true,

    // DocSearch credentials
    'docsearchAppId' => env('DOCSEARCH_APP_ID'),
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
