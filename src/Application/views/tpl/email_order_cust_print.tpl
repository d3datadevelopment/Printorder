[{block name="d3printorder_email_order_cust_print"}]
    [{if $hasFile && $sHtmlPath}]
        <style type="text/css">
            @media print { .button { display : none; } }
        </style>
        <input type="submit" class="button" value="[{oxmultilang ident="D3_ORDERPRINT_PRINT"}]" onclick="print();"/>
        <br/>
        <br/>
        [{include file="$sHtmlPath"}]
    [{else}]
        [{oxmultilang ident="D3_ORDERPRINT_NOFILE_ERROR"}]
    [{/if}]
[{/block}]
