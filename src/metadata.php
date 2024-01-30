<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

use D3\ModCfg\Application\Model\d3utils;
use D3\Printorder\Setup as ModuleSetup;
use OxidEsales\Eshop\Application\Model as OxidModel;
use OxidEsales\Eshop\Core as OxidCore;


/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

$sModuleId = 'd3printorder';

$sLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> ';

/**
 * Module information
 */
$aModule = [
    'id'             => $sModuleId,
    'title'          => $sLogo.' Bestellbest&auml;tigung drucken',
    'description'    => [
        'de' => 'Speichert beim Abschlie&szlig;en einer Bestellung die HTML-E-Mail an den Kunden. ' //
            . 'Erm&ouml;glicht dadurch das nachtr&auml;gliche Ausdrucken der Bestellbest&auml;tigung.<br><br>' //
            . 'Dies kann auch f&uuml;r bereits existierende Bestellungen im Nachgang erfolgen. Beachten Sie hier, ' //
            . 'dass Bestellungen mit fehlenden (im Shop gel&ouml;schte) Artikeln ggf. nicht mehr vollst&auml;ndig ' //
            . 'bearbeitet werden k&ouml;nnen.',
        'en' => 'n/a',
    ],
    'thumbnail'      => 'picture.png',
    'version'        => '5.0.1.0',
    'author'         => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'          => 'support@shopmodule.com',
    'url'            => 'http://www.oxidmodule.com/',
    'extend'         => [
        OxidCore\Email::class                       => D3\Printorder\Modules\Core\d3_oxemail_printorder::class,
        OxidModel\Order::class                      => D3\Printorder\Modules\Application\Model\d3_oxorder_printorder::class,
        OxidModel\OrderArticle::class               => D3\Printorder\Modules\Application\Model\d3_oxorderarticle_printorder::class,
    ],
    'controllers'          => [
        'printorder'               => D3\Printorder\Application\Model\printOrder::class,
        'printorderpreview'        => D3\Printorder\Application\Controller\printorderPreview::class,

        //Admin
        'd3_printorder_main'       => D3\Printorder\Application\Controller\Admin\main::class,
        'd3_printorder_support'    => D3\Printorder\Application\Controller\Admin\support::class,
        'd3_printorder_admin_list' => D3\Printorder\Application\Controller\Admin\adminList::class,
        'd3_printorder_settings'   => D3\Printorder\Application\Controller\Admin\settings::class,
    ],
    'templates'      => [
        'settingsprintorder.tpl'                    => 'd3/printorder/Application/views/admin/tpl/settingsprintorder.tpl',
        'email_order_cust_print.tpl'                => 'd3/printorder/Application/views/tpl/email_order_cust_print.tpl',

        // themeabhängige TPL
        'd3printorder_azure_page_account_order.tpl' => 'd3/printorder/Application/views/azure/tpl/d3printorder_account_order.tpl',
        'd3printorder_flow_page_account_order.tpl'  => 'd3/printorder/Application/views/flow/tpl/d3printorder_account_order.tpl',
        'd3printorder_wave_page_account_order.tpl'  => 'd3/printorder/Application/views/flow/tpl/d3printorder_account_order.tpl',
    ],
    'events'         => [
        'onActivate' => '\D3\ModCfg\Application\Model\Install\d3install::checkUpdateStart',
    ],
    'blocks'         => [
        [
            'template' => 'page/account/order.tpl',
            'block'    => 'account_order_history',
            'file'     => 'Application/views/blocks/account_order_history.tpl',
        ],
        [
            'template' => 'page/account/order.tpl',
            'block'    => 'account_order_history_cart_items',
            'file'     => 'Application/views/blocks/account_order_history_cart_items.tpl',
        ],
        [
            'template' => 'page/checkout/thankyou.tpl',
            'block'    => 'checkout_thankyou_proceed',
            'file'     => 'Application/views/blocks/d3printorder_page_checkout_thankyou.tpl'
        ],
        [
            'template' => 'order_overview.tpl',
            'block'    => 'admin_order_overview_customer_number',
            'file'     => 'Application/views/blocks/d3printorder_order_overview.tpl'
        ],
    ],
    'settings' => [
        [
            'group'     => 'd3thememapping_module',
            'name'      => 'd3custParentThemeMappedToFlow_'.$sModuleId,
            'type'      => 'str',
            'value'     => ''
        ],
        [
            'group'     => 'd3thememapping_module',
            'name'      => 'd3custParentThemeMappedToAzure_'.$sModuleId,
            'type'      => 'str',
            'value'     => ''
        ],
    ],
];
