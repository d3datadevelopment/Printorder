[{include file="headitem.tpl" title="Order Print"}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="actshop" value="[{$shop->getId()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

[{d3modcfgcheck modid="d3printorder"}][{/d3modcfgcheck}]
[{if $mod_d3printorder}]
    [{if $edit->getErrorMessage()}]
        <div class="extension_error">
            [{$edit->getErrorMessage()}]
        </div>
    [{/if}]
    <style type="text/css">
        .d3modcfg_btn .d3printorderButton{
            background   : none;
            border       : none;
            color        : white;
            padding-left : 30px;
        }

        .d3modcfg_btn.icon .d3printorderButton i{
            position : absolute;
            left     : 5px;
            width    : 20px;
            height   : 20px;
        }

        .buttons .d3modcfg_btn{
            width : 220px;
        }

        .orderprintsettings .buttons tr td input{
            margin-left : 10px;
        }

        .orderprintsettings tr td{
            margin-right : 10px;
        }
    </style>
    <fieldset style="border: 1px solid #999999; border-radius: 5px;">
        <legend>
            <strong>[{oxmultilang ident="D3_ORDERPRINT_MODULNAME"}]</strong>
        </legend>

        <table width="100%" border="0" class="orderprintsettings">
            <tr>
                <td valign="top" style="width:50%; border-right: 1px solid #999999; vertical-align: top;">
                    <form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
                        <div>
                            [{$oViewConf->getHiddenSid()}]
                            <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
                            <input type="hidden" name="fnc" value="save">
                            <input type="hidden" name="oxid" value="[{$oxid}]">
                            <input type="hidden" name="editval[d3_cfg_mod__oxid]" value="[{$oxid}]">
                        </div>
                        <table border="0">
                            <tr>
                                <td class="edittext ext_edittext">
                                    <label for="sPathToOrderPrints">
                                        [{oxmultilang ident="D3_ORDERPRINT_PATHTOFILES"}]
                                    </label>
                                </td>
                                <td class="edittext ext_edittext">
                                    [{oxinputhelp ident="D3_ORDERPRINT_PATHTOFILES_HELP"}]
                                    [{assign var="sPath" value=$oView->getModuleSetting('d3_cfg_mod__sPathToOrderPrints')}]
                                    <input id="sPathToOrderPrints" type="text" value="[{$sPath}]"
                                           name="value[d3_cfg_mod__sPathToOrderPrints]">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="d3modcfg_btn icon d3color-green status_ok">
                                        <button class="d3printorderButton" type="submit" name="save">
                                            <i class="fa fa-check-circle fa-17x fa-inverse"></i>
                                            <span style="margin-left:4px;"></span>
                                            [{oxmultilang ident="D3_ORDERPRINT_GENERAL_SAVE"}]
                                        </button>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
                <td valign="top">
                    <!-- right side  -->
                    <table class="buttons" style="padding-left: 15px;">
                        <tr>
                            <td>
                                [{if $blShowRecachingInAdmin}]
                                    <!-- Recaching alter Bestellungen -->
                                    <form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
                                        <div>
                                            [{$oViewConf->getHiddenSid()}]
                                            <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
                                            <input type="hidden" name="fnc" value="d3printorder_recaching">
                                            <input type="hidden" name="oxid" value="[{$oxid}]">
                                            <input type="hidden" name="editval[d3_cfg_mod__oxid]" value="[{$oxid}]">
                                        </div>
                                        <span class="d3modcfg_btn icon action_refresh">
                                            <button class="d3printorderButton" type="submit" name="save" class="">
                                                <i class="fa fa-refresh fa-17x fa-d3color-white"></i>
                                                [{oxmultilang ident="D3_ORDERPRINT_RECACHING_BTN"}]
                                            </button>
                                            <span style="margin-left:4px;"></span>
                                        </span>
                                        [{oxinputhelp ident="D3_ORDERPRINT_RECACHING_HELP"}]
                                    </form>
                                [{/if}]
                            </td>
                        </tr>
                        [{if $blOldPrintorders}]
                            <tr>
                                <td>
                                    <!-- altes Verzeichnis vorhanden -> Button für Aufräumaktion anzeigen -->
                                    <form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]"
                                          method="post">
                                        <div>
                                            [{$oViewConf->getHiddenSid()}]
                                            <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
                                            <input type="hidden" name="fnc" value="moveOldPrintOrderFilesToNewDir">
                                            <input type="hidden" name="oxid" value="[{$oxid}]">
                                            <input type="hidden" name="editval[d3_cfg_mod__oxid]" value="[{$oxid}]">
                                        </div>
                                        <span class="d3modcfg_btn icon d3color-green">
                                            <button class="d3printorderButton" type="submit" name="save">
                                                <i class="fa fa-check-circle fa-inverse"></i>
                                                [{oxmultilang ident="D3_ORDERPRINT_CLEAR_OLD_DATA"}]
                                            </button>
                                            <span style="background-position: 0 -300px; margin-left:4px;"></span>
                                        </span>
                                        [{oxinputhelp ident="D3_ORDERPRINT_CLEAR_OLD_DATA_HELP"}]
                                    </form>
                                </td>
                            </tr>
                        [{/if}]
                    </table>
                </td>
            </tr>
        </table>
    </fieldset>
[{else}]
    <form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
        <div>
            [{$oViewConf->getHiddenSid()}]
            <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
            <input type="hidden" name="fnc" value="save">
            <input type="hidden" name="oxid" value="[{$oxid}]">
            <input type="hidden" name="editval[d3_cfg_mod__oxid]" value="[{$oxid}]">
        </div>
        [{include file="d3_cfg_mod_active.tpl"}]
        <span class="d3modcfg_btn icon d3color-green status_ok">
            <button class="d3printorderButton" type="submit" name="save">
                <i class="fa fa-check-circle fa-17x fa-inverse"></i>
                <span style="margin-left:4px;"></span>
                [{oxmultilang ident="D3_ORDERPRINT_GENERAL_SAVE"}]
            </button>
        </span>
    </form>
[{/if}]

[{include file="d3_cfg_mod_inc.tpl"}]
