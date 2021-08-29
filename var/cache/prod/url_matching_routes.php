<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account/address' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/account/ajouter-une-addresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/account/mes-commandes' => [[['_route' => 'account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/account/modifier-mon-mdp' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/atelier/debora' => [[['_route' => 'atelier_debora', '_controller' => 'App\\Controller\\AtelierDeboraController::index'], null, null, null, false, false, null]],
        '/ateliers' => [[['_route' => 'ateliers', '_controller' => 'App\\Controller\\AteliersController::index'], null, null, null, false, false, null]],
        '/baby' => [[['_route' => 'productsBabies', '_controller' => 'App\\Controller\\BabyController::index'], null, null, null, false, false, null]],
        '/boy' => [[['_route' => 'productsBoys', '_controller' => 'App\\Controller\\BoyController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/comingsoon' => [[['_route' => 'comingsoon', '_controller' => 'App\\Controller\\ComingsoonController::index'], null, null, null, false, false, null]],
        '/concept' => [[['_route' => 'concept', '_controller' => 'App\\Controller\\ConceptController::index'], null, null, null, false, false, null]],
        '/conditions/generales' => [[['_route' => 'conditions_generales', '_controller' => 'App\\Controller\\ConditionsGeneralesController::index'], null, null, null, false, false, null]],
        '/cookie' => [[['_route' => 'cookie', '_controller' => 'App\\Controller\\CookieController::index'], null, null, null, false, false, null]],
        '/deuxieme/vie' => [[['_route' => 'deuxieme_vie', '_controller' => 'App\\Controller\\DeuxiemeVieController::index'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\FaqController::index'], null, null, null, false, false, null]],
        '/girl' => [[['_route' => 'productsGirl', '_controller' => 'App\\Controller\\GirlController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ccount/(?'
                        .'|m(?'
                            .'|odifier\\-une\\-addresse/([^/]++)(*:57)'
                            .'|es\\-commandes/([^/]++)(*:86)'
                        .')'
                        .'|supprimer\\-une\\-addresse/([^/]++)(*:127)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:169)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:200)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:236)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:271)'
                        .'|de(?'
                            .'|lete([^/]++)(*:296)'
                            .'|crease([^/]++)(*:318)'
                        .')'
                    .')'
                    .'|ommandes/(?'
                        .'|erreur/([^/]++)(*:355)'
                        .'|merci/([^/]++)(*:377)'
                        .'|create\\-session/([^/]++)(*:409)'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:436)'
                .'|/modifier\\-mon\\-mot\\-de\\-passe/([^/]++)(*:483)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        57 => [[['_route' => 'account_address_edit', '_controller' => 'App\\Controller\\AccountAddressController::edit'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        127 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        169 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        236 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        271 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        377 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderSuccessController::index'], ['stripeSessionId'], null, null, false, true, null]],
        409 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        436 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        483 => [
            [['_route' => 'update_password"', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
