<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link      http://www.oxidmodule.com
 */

$sModId = 'd3printorder';

$sD3Help_mappedTo = '<p>Our modules are prepared for the default themes of the OXID eShop. '.
    'You don\'t need to enter anything here, if your used shop theme is (or extends) a default OXID theme. '.
    'Is it a completely individual Theme, please enter the parent theme id '.
    'to the OXID default theme that is closest to it.</p>'.
    '<p>Read further informations in our <a '.
    'href="https://faq.d3data.de/allgemein/template-bloecke-dem-eigenen-theme-zuordnen/" target="FAQ">FAQ</a>.</p>';

$aLang = array(
    'charset'                                 => 'UTF-8',

    'SHOP_MODULE_GROUP_d3thememapping_global'     => 'assign template blocks to your individual theme (global setting for D3 modules)',
    'SHOP_MODULE_GROUP_d3thememapping_module'     => 'assign template blocks to your individual theme (setting for this module only)',
    'SHOP_MODULE_d3custParentThemeMappedToMobile_'.$sModId => 'If this herein referenced theme is active, "<b>mobile</b>" template blocks of the module is used.',
    'SHOP_MODULE_d3custParentThemeMappedToAzure_'.$sModId => 'If this herein referenced theme is active, "<b>azure</b>" template blocks of the module is used.',
    'SHOP_MODULE_d3custParentThemeMappedToFlow_'.$sModId => 'If this herein referenced theme is active, "<b>flow</b>" template blocks of the module is used.',

    'HELP_SHOP_MODULE_d3custParentThemeMappedToMobile_'.$sModId => $sD3Help_mappedTo,
    'HELP_SHOP_MODULE_d3custParentThemeMappedToAzure_'.$sModId => $sD3Help_mappedTo,
    'HELP_SHOP_MODULE_d3custParentThemeMappedToFlow_'.$sModId => $sD3Help_mappedTo,
);
