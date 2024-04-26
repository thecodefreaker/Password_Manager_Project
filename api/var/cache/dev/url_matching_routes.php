<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/authentication/register' => [[['_route' => 'authentication_register', '_controller' => 'App\\Controller\\RegistrationController:register'], null, null, null, false, false, null]],
        '/authentication/login' => [[['_route' => 'authentication_login'], null, null, null, false, false, null]],
        '/authentication/logout' => [[['_route' => 'authentication_logout'], null, null, null, false, false, null]],
        '/vaults' => [
            [['_route' => 'vaults', '_controller' => 'App\\Controller\\VaultController:list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'vaults_create', '_controller' => 'App\\Controller\\VaultController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/logins' => [[['_route' => 'logins_create', '_controller' => 'App\\Controller\\LoginController::create'], null, ['POST' => 0], null, false, false, null]],
        '/notes' => [[['_route' => 'notes_create', '_controller' => 'App\\Controller\\NoteController::create'], null, ['POST' => 0], null, false, false, null]],
        '/categories' => [
            [['_route' => 'categories', '_controller' => 'App\\Controller\\CategoryController:list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'categories_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/vaults/([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})(?'
                    .'|(*:241)'
                    .'|/items(*:255)'
                .')'
                .'|/logins/([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})(?'
                    .'|(*:337)'
                .')'
                .'|/notes/([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})(?'
                    .'|(*:418)'
                .')'
                .'|/categories/([0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})(*:501)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        241 => [
            [['_route' => 'vaults_update', '_controller' => 'App\\Controller\\VaultController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'vaults_delete', '_controller' => 'App\\Controller\\VaultController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        255 => [[['_route' => 'vaults_items', '_controller' => 'App\\Controller\\VaultController::listItems'], ['id'], ['GET' => 0], null, false, false, null]],
        337 => [
            [['_route' => 'logins_update', '_controller' => 'App\\Controller\\LoginController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'logins_delete', '_controller' => 'App\\Controller\\LoginController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        418 => [
            [['_route' => 'notes_update', '_controller' => 'App\\Controller\\NoteController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'notes_delete', '_controller' => 'App\\Controller\\NoteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        501 => [
            [['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
