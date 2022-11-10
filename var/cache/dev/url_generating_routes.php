<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::indexAction'], [], [['text', '/']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginAction'], [], [['text', '/login']], [], [], []],
    'login_check' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginCheck'], [], [['text', '/login_check']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logoutCheck'], [], [['text', '/logout']], [], [], []],
    'task_list' => [[], ['_controller' => 'App\\Controller\\TaskController::listAction'], [], [['text', '/tasks']], [], [], []],
    'task_create' => [[], ['_controller' => 'App\\Controller\\TaskController::createAction'], [], [['text', '/tasks/create']], [], [], []],
    'task_edit' => [['id'], ['_controller' => 'App\\Controller\\TaskController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tasks']], [], [], []],
    'task_toggle' => [['id'], ['_controller' => 'App\\Controller\\TaskController::toggleTaskAction'], [], [['text', '/toggle'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tasks']], [], [], []],
    'task_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskController::deleteTaskAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tasks']], [], [], []],
    'user_list' => [[], ['_controller' => 'App\\Controller\\UserController::listAction'], [], [['text', '/users']], [], [], []],
    'user_create' => [[], ['_controller' => 'App\\Controller\\UserController::createAction'], [], [['text', '/users/create']], [], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
];
