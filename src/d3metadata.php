<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link      http://www.oxidmodule.com
 */
use D3\ModCfg\setup as ModuleSetup;
$aModule = [
    'd3FileRegister'    => [
        'd3/printorder/metadata.php',
        'd3/printorder/d3metadata.php',
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
        'd3/printorder/Application/views/tpl/email_order_cust_print.tpl',
        'd3/printorder/Application/views/azure/tpl/d3printorder_account_order.tpl',
        'd3/printorder/Application/views/flow/tpl/d3printorder_account_order.tpl'
    ],
    'd3SetupClasses'    => [
        ModuleSetup\d3_cfg_mod_update::class,
        ModuleSetup\d3log_update::class,
        D3\Printorder\Setup\InstallRoutine::class
    ]
];