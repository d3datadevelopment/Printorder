[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3printorder"}][{/d3modcfgcheck}]
[{if $mod_d3printorder && $order->d3GetPrintOrderFilePath()}]
    [{block name="d3printorder_page_checkout_thankyou_proceed"}]
        <h3 class="blockHead block-head">[{oxmultilang ident="D3_ORDERPRINT_HEADER"}]</h3>
        <a href="[{$order->d3GetPrintOrderPreviewLink()}]" class="link" target="_blank"
           onclick="window.open(this.href, '_blank', 'width=630,height=800,status=yes,scrollbars=yes,resizable=yes'); return false">
            [{oxmultilang ident="D3_ORDERPRINT_LINK"}]
        </a>
    [{/block}]
[{/if}]
