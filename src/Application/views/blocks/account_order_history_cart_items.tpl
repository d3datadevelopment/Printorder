[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3printorder"}][{/d3modcfgcheck}]
[{if $mod_d3printorder && $order->d3GetPrintOrderFilePath()}]
    [{if $oModCfg_d3printorder->isThemeIdMappedTo('wave')}]
        [{include file="d3printorder_wave_page_account_order.tpl"}]
    [{elseif $oModCfg_d3printorder->isThemeIdMappedTo('flow')}]
        [{include file="d3printorder_flow_page_account_order.tpl"}]
    [{else}]
        [{include file="d3printorder_azure_page_account_order.tpl"}]
    [{/if}]
[{/if}]
