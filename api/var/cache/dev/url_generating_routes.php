<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'authentication_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController:register'], [], [['text', '/authentication/register']], [], []],
    'authentication_login' => [[], [], [], [['text', '/authentication/login']], [], []],
    'authentication_logout' => [[], [], [], [['text', '/authentication/logout']], [], []],
    'vaults' => [[], ['_controller' => 'App\\Controller\\VaultController:list'], [], [['text', '/vaults']], [], []],
    'vaults_create' => [[], ['_controller' => 'App\\Controller\\VaultController::create'], [], [['text', '/vaults']], [], []],
    'vaults_update' => [['id'], ['_controller' => 'App\\Controller\\VaultController::update'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/vaults']], [], []],
    'vaults_delete' => [['id'], ['_controller' => 'App\\Controller\\VaultController::delete'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/vaults']], [], []],
    'vaults_items' => [['id'], ['_controller' => 'App\\Controller\\VaultController::listItems'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'userId' => '\\d+'], [['text', '/items'], ['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/vaults']], [], []],
    'logins_create' => [[], ['_controller' => 'App\\Controller\\LoginController::create'], [], [['text', '/logins']], [], []],
    'logins_update' => [['id'], ['_controller' => 'App\\Controller\\LoginController::update'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/logins']], [], []],
    'logins_delete' => [['id'], ['_controller' => 'App\\Controller\\LoginController::delete'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/logins']], [], []],
    'notes_create' => [[], ['_controller' => 'App\\Controller\\NoteController::create'], [], [['text', '/notes']], [], []],
    'notes_update' => [['id'], ['_controller' => 'App\\Controller\\NoteController::update'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/notes']], [], []],
    'notes_delete' => [['id'], ['_controller' => 'App\\Controller\\NoteController::delete'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/notes']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\CategoryController:list'], [], [['text', '/categories']], [], []],
    'categories_create' => [[], ['_controller' => 'App\\Controller\\CategoryController::create'], [], [['text', '/categories']], [], []],
    'categories_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], ['id' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], [['variable', '/', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', 'id', true], ['text', '/categories']], [], []],
];
