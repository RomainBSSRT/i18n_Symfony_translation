<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/\\.well\\-known/genid/([^/]++)(*:36)'
                .'|/(index)?(?:\\.([^/]++))?(*:67)'
                .'|/docs(?:\\.([^/]++))?(*:94)'
                .'|/contexts/([^.]+)(?:\\.(jsonld))?(*:133)'
                .'|/applications(?'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:183)'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:209)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:247)'
                    .')'
                .')'
                .'|/languages(?'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:296)'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:322)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:360)'
                    .')'
                .')'
                .'|/phrases(?'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:407)'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:433)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:471)'
                    .')'
                .')'
                .'|/translations(?'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:523)'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:549)'
                    .')'
                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                        .'|(*:587)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:625)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        94 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        133 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        183 => [[['_route' => '_api_/applications/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Application', '_api_operation_name' => '_api_/applications/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        209 => [
            [['_route' => '_api_/applications.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Application', '_api_operation_name' => '_api_/applications.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/applications.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Application', '_api_operation_name' => '_api_/applications.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        247 => [
            [['_route' => '_api_/applications/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Application', '_api_operation_name' => '_api_/applications/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/applications/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Application', '_api_operation_name' => '_api_/applications/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/applications/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Application', '_api_operation_name' => '_api_/applications/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        296 => [[['_route' => '_api_/languages/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Language', '_api_operation_name' => '_api_/languages/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        322 => [
            [['_route' => '_api_/languages.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Language', '_api_operation_name' => '_api_/languages.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/languages.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Language', '_api_operation_name' => '_api_/languages.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => '_api_/languages/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Language', '_api_operation_name' => '_api_/languages/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/languages/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Language', '_api_operation_name' => '_api_/languages/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/languages/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Language', '_api_operation_name' => '_api_/languages/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        407 => [[['_route' => '_api_/phrases/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Phrase', '_api_operation_name' => '_api_/phrases/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        433 => [
            [['_route' => '_api_/phrases.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Phrase', '_api_operation_name' => '_api_/phrases.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/phrases.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Phrase', '_api_operation_name' => '_api_/phrases.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        471 => [
            [['_route' => '_api_/phrases/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Phrase', '_api_operation_name' => '_api_/phrases/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/phrases/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Phrase', '_api_operation_name' => '_api_/phrases/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/phrases/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Phrase', '_api_operation_name' => '_api_/phrases/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        523 => [[['_route' => '_api_/translations/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Translation', '_api_operation_name' => '_api_/translations/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        549 => [
            [['_route' => '_api_/translations.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Translation', '_api_operation_name' => '_api_/translations.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/translations.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Translation', '_api_operation_name' => '_api_/translations.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        587 => [
            [['_route' => '_api_/translations/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Translation', '_api_operation_name' => '_api_/translations/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/translations/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Translation', '_api_operation_name' => '_api_/translations/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/translations/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Translation', '_api_operation_name' => '_api_/translations/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        625 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
