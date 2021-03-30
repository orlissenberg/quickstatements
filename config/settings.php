<?php

return [
    "site" => "wikidata",
    "valid_origin" => env("VALID_ORIGIN"),
    "sites" => [
        "wikidata" => [
            "oauth" => [
                "language" => env("MEDIAWIKI_SITE_LANG"),
                "project" => env("MEDIAWIKI_SITE_NAME"),
                "mwOAuthUrl" => env("WIKIBASE_SCHEME_AND_HOST") . "/index.php?title=Special:OAuth",
                "mwOAuthPublicUrl" => env("WIKIBASE_PUBLIC_HOST_AND_PORT") . "/index.php?title=Special:OAuth",
                "mwOAuthIW" => "mw",
            ],
            "api" => env("WIKIBASE_SCHEME_AND_HOST") . "/w/api.php",
            "apiPublicUrl" => env("WIKIBASE_PUBLIC_HOST_AND_PORT") . "/w/api.php",
            "pageBase" => env("WIKIBASE_SCHEME_AND_HOST") . "/wiki/",
            "entityBase" => env("WIKIBASE_SCHEME_AND_HOST") . "/entity/",
            "toolBase" => env("TOOLBASE"),
            "types" => [
                "P" => [
                    "type" => "property",
                    "ns" => env("WIKIBASE_PROPERTY_NAMESPACE", null, 'int'),
                    "ns_prefix" => env("WIKIBASE_PROPERTY_PREFIX"),
                ],
                "Q" => [
                    "type" => "item",
                    "ns" => env("WIKIBASE_ITEM_NAMESPACE", null, 'int'),
                    "ns_prefix" => env("WIKIBASE_ITEM_PREFIX"),
                ],
                "L" => [
                    "type" => "lexeme",
                    "ns" => env("WIKIBASE_LEXEME_NAMESPACE", null, 'int'),
                    "ns_prefix" => env("WIKIBASE_LEXEME_PREFIX"),
                ],
            ],
        ],
        /*
        "factgrid" : {
            "oauth" : { "language":"wikidata" , "project":"wikidata" , "ini_file":"/home/factgrid/quickstatements/oauth.ini" , "mwOAuthUrl":"https://database.factgrid.de/index.php?title=Special:OAuth" , "mwOAuthIW":"" } ,
                "api" : "https://database.factgrid.de/api.php" ,
                "pageBase" : "https://database.factgrid.de/index.php/" ,
                "entityBase" : "https://database.factgrid.de/entity/" ,
                "toolBase" : "https://database.factgrid.de/quickstatements" ,
                "types" : {
                    "P" : { "type":"property" , "ns":122 , "ns_prefix":"Property:" } ,
                    "Q" : { "type":"item" , "ns":120 , "ns_prefix":"Item:" }
                }
            }
        */
    ],
];