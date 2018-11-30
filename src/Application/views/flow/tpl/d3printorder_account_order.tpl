[{block name="d3printorder_page_account_order_flow"}]
    <br>
    <strong>[{oxmultilang ident="D3_ORDERPRINT_HEADER"}]</strong>&nbsp;
    <a href="[{$order->d3GetPrintOrderPreviewLink()}]" target="_blank"
       onclick="window.open(this.href, '_blank', 'width=630,height=800,status=yes,scrollbars=yes,resizable=yes'); return false">
        [{oxmultilang ident="D3_ORDERPRINT_LINK"}]
    </a>
[{/block}]