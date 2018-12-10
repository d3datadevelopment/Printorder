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

use D3\Printorder\Setup as ModuleSetup;
use OxidEsales\Eshop\Application\Controller as OxidController;
use OxidEsales\Eshop\Application\Model as OxidModel;
use OxidEsales\Eshop\Core as OxidCore;


/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
$sD3Logo          = (class_exists(d3utils::class) ? d3utils::getInstance()->getD3Logo() : 'D&sup3;');
$sModuleId = 'd3printorder';

/**
 * Module information
 */
$aModule = array(
    'id'             => $sModuleId,
    'title'          => $sD3Logo . ' Bestellbest&auml;tigung drucken',
    'description'    => array(
        'de' => 'Speichert beim Abschlie&szlig;en einer Bestellung die HTML-E-Mail an den Kunden. ' //
            . 'Erm&ouml;glicht dadurch das nachtr&auml;gliche Ausdrucken der Bestellbest&auml;tigung.<br><br>' //
            . 'Dies kann auch f&uuml;r bereits existierende Bestellungen im Nachgang erfolgen. Beachten Sie hier, ' //
            . 'dass Bestellungen mit fehlenden (im Shop gel&ouml;schte) Artikeln ggf. nicht mehr vollst&auml;ndig ' //
            . 'bearbeitet werden k&ouml;nnen.',
        'en' => 'n/a',
    ),
    'thumbnail'      => 'picture.png',
    'version'        => '4.0.0.1',
    'author'         => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'          => 'support@shopmodule.com',
    'url'            => 'http://www.oxidmodule.com/',
    'extend'         => array(
        OxidCore\Email::class                       => D3\Printorder\Modules\Core\d3_oxemail_printorder::class,
        OxidModel\Order::class                      => D3\Printorder\Modules\Application\Model\d3_oxorder_printorder::class,
        OxidModel\OrderArticle::class               => D3\Printorder\Modules\Application\Model\d3_oxorderarticle_printorder::class,
    ),
    'controllers'          => array(
        'printorder'               => D3\Printorder\Application\Model\printOrder::class,
        'printorderpreview'        => D3\Printorder\Application\Controller\printorderPreview::class,

        //Admin
        'd3_printorder_main'       => D3\Printorder\Application\Controller\Admin\main::class,
        'd3_printorder_support'    => D3\Printorder\Application\Controller\Admin\support::class,
        'd3_printorder_admin_list' => D3\Printorder\Application\Controller\Admin\adminList::class,
        'd3_printorder_settings'   => D3\Printorder\Application\Controller\Admin\settings::class,
    ),
    'templates'      => array(
        'settingsprintorder.tpl'                    => 'd3/printorder/Application/views/admin/tpl/settingsprintorder.tpl',
        'email_order_cust_print.tpl'                => 'd3/printorder/Application/views/tpl/email_order_cust_print.tpl',

        // themeabhängige TPL
        'd3printorder_azure_page_account_order.tpl' => 'd3/printorder/Application/views/azure/tpl/d3printorder_account_order.tpl',
        'd3printorder_flow_page_account_order.tpl'  => 'd3/printorder/Application/views/flow/tpl/d3printorder_account_order.tpl',
    ),
    'events'         => array(
        'onActivate' => \D3\ModCfg\Application\Model\Install\d3install::class . '::checkUpdateStart',
    ),
    'blocks'         => array(
        array(
            'template' => 'page/account/order.tpl',
            'block'    => 'account_order_history',
            'file'     => 'Application/views/blocks/account_order_history.tpl',
        ),
        array(
            'template' => 'page/account/order.tpl',
            'block'    => 'account_order_history_cart_items',
            'file'     => 'Application/views/blocks/account_order_history_cart_items.tpl',
        ),
        array(
            'template' => 'page/checkout/thankyou.tpl',
            'block'    => 'checkout_thankyou_proceed',
            'file'     => 'Application/views/blocks/d3printorder_page_checkout_thankyou.tpl'
        ),
    ),
    'settings' => array(
        array(
            'group'     => 'd3thememapping_module',
            'name'      => 'd3custParentThemeMappedToFlow_'.$sModuleId,
            'type'      => 'str',
            'value'     => ''
        ),
        array(
            'group'     => 'd3thememapping_module',
            'name'      => 'd3custParentThemeMappedToAzure_'.$sModuleId,
            'type'      => 'str',
            'value'     => ''
        ),
    ),
    'd3FileRegister' => array(
        'd3/printorder/metadata.php',
        'd3/printorder/Setup/InstallRoutine.php',
        'd3/printorder/IntelliSenseHelper.php',


        'd3/printorder/Modules/Application/Model/d3_oxorder_printorder.php',
        'd3/printorder/Modules/Application/Model/d3_oxorderarticle_printorder.php',
        'd3/printorder/Modules/Core/d3_oxemail_printorder.php',

        'd3/printorder/Application/Controller/Admin/adminList.php',
        'd3/printorder/Application/Controller/Admin/main.php',
        'd3/printorder/Application/Controller/Admin/settings.php',
        'd3/printorder/Application/Controller/Admin/support.php',
        'd3/printorder/Application/Controller/printorderPreview.php',
        'd3/printorder/Application/Model/printOrder.php',

        'd3/printorder/Application/translations/de/d3orderprint_lang.php',
        'd3/printorder/Application/translations/en/d3orderprint_lang.php',

        'd3/printorder/Application/views/admin/de/d3orderprint_lang.php',
        'd3/printorder/Application/views/admin/de/module_options.php',
        'd3/printorder/Application/views/admin/en/d3orderprint_lang.php',
        'd3/printorder/Application/views/admin/en/module_options.php',

        'd3/printorder/Application/views/admin/tpl/settingsprintorder.tpl',
        'd3/printorder/Application/views/blocks/account_order_history.tpl',
        'd3/printorder/Application/views/blocks/account_order_history_cart_items.tpl',
        'd3/printorder/Application/views/blocks/d3printorder_page_checkout_thankyou.tpl',
        'd3/printorder/Application/views/tpl/email_order_cust_print.tpl',
        'd3/printorder/Application/views/azure/tpl/d3printorder_account_order.tpl',
        'd3/printorder/Application/views/flow/tpl/d3printorder_account_order.tpl'
    ),
    'd3SetupClasses' => array(
        ModuleSetup\InstallRoutine::class,
    ),
);
