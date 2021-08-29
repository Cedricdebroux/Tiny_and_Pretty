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
        '/account/address' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/account/ajouter-une-addresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/account/mes-commandes' => [[['_route' => 'account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/account/modifier-mon-mdp' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/atelier/debora' => [[['_route' => 'atelier_debora', '_controller' => 'App\\Controller\\AtelierDeboraController::index'], null, null, null, false, false, null]],
        '/ateliers' => [[['_route' => 'ateliers', '_controller' => 'App\\Controller\\AteliersController::index'], null, null, null, false, false, null]],
        '/boy' => [[['_route' => 'productsBoys', '_controller' => 'App\\Controller\\BoyController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/comingsoon' => [[['_route' => 'comingsoon', '_controller' => 'App\\Controller\\ComingsoonController::index'], null, null, null, false, false, null]],
        '/concept' => [[['_route' => 'concept', '_controller' => 'App\\Controller\\ConceptController::index'], null, null, null, false, false, null]],
        '/conditions/generales' => [[['_route' => 'conditions_generales', '_controller' => 'App\\Controller\\ConditionsGeneralesController::index'], null, null, null, false, false, null]],
        '/contact/partner' => [[['_route' => 'contact_partner', '_controller' => 'App\\Controller\\ContactPartnerController::index'], null, null, null, false, false, null]],
        '/contact/user' => [[['_route' => 'contact_user', '_controller' => 'App\\Controller\\ContactUserController::index'], null, null, null, false, false, null]],
        '/cookie' => [[['_route' => 'cookie', '_controller' => 'App\\Controller\\CookieController::index'], null, null, null, false, false, null]],
        '/deuxieme/vie' => [[['_route' => 'deuxieme_vie', '_controller' => 'App\\Controller\\DeuxiemeVieController::index'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\FaqController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/Mode' => [[['_route' => 'productsBabies', '_controller' => 'App\\Controller\\HomeController::mode'], null, null, null, false, false, null]],
        '/maison' => [[['_route' => 'productsGirl', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/livraisons/et/retours' => [[['_route' => 'livraisons_et_retours', '_controller' => 'App\\Controller\\LivraisonsEtRetoursController::index'], null, null, null, false, false, null]],
        '/commandes' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commandes/recapitulatif' => [[['_route' => 'order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0], null, false, false, null]],
        '/paiement/securise' => [[['_route' => 'paiement_securise', '_controller' => 'App\\Controller\\PaiementSecuriseController::index'], null, null, null, false, false, null]],
        '/partenaires' => [[['_route' => 'partenaires', '_controller' => 'App\\Controller\\PartenairesController::index'], null, null, null, false, false, null]],
        '/qui/sommes/nous' => [[['_route' => 'qui_sommes_nous', '_controller' => 'App\\Controller\\QuiSommesNousController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tinyworld' => [[['_route' => 'tinyworld', '_controller' => 'App\\Controller\\TinyworldController::index'], null, null, null, false, false, null]],
        '/toy' => [[['_route' => 'productsToy', '_controller' => 'App\\Controller\\ToyController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ccount/(?'
                        .'|m(?'
                            .'|odifier\\-une\\-addresse/([^/]++)(*:219)'
                            .'|es\\-commandes/([^/]++)(*:249)'
                        .')'
                        .'|supprimer\\-une\\-addresse/([^/]++)(*:291)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:333)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:364)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:400)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:435)'
                        .'|de(?'
                            .'|lete([^/]++)(*:460)'
                            .'|crease([^/]++)(*:482)'
                        .')'
                    .')'
                    .'|ommandes/(?'
                        .'|erreur/([^/]++)(*:519)'
                        .'|merci/([^/]++)(*:541)'
                        .'|create\\-session/([^/]++)(*:573)'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:600)'
                .'|/modifier\\-mon\\-mot\\-de\\-passe/([^/]++)(*:647)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'account_address_edit', '_controller' => 'App\\Controller\\AccountAddressController::edit'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        291 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        364 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        400 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        435 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        519 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        541 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderSuccessController::index'], ['stripeSessionId'], null, null, false, true, null]],
        573 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        600 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        647 => [
            [['_route' => 'update_password"', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
