<?php

return [
    "site" => "wikidata",
    "valid_origin" => env("VALID_ORIGIN"),
    "sites" => [
        "wikidata" => [
            "oauth" => [
                "language" => "en",
                "project" => "wikidata",
                "mwOAuthUrl" => env("MWOAUTHURL"),
                "mwOAuthIW" => "mw",
            ],
            "server" => env("SERVER"),
            "api" => env("API"),
            "pageBase" => env("PAGEBASE"),
            "entityBase" => env("ENTITYBASE"),
            "toolBase" => env("TOOLBASE"),
            "types" => [
                "P" => [
                    "type" => "property",
                    "ns" => 120,
                    "ns_prefix" => "Property:",
                ],
                "Q" => [
                    "type" => "item",
                    "ns" => 0,
                    "ns_prefix" => "",
                ],
                "L" => [
                    "type" => "lexeme",
                    "ns" => 146,
                    "ns_prefix" => "Lexeme:",
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